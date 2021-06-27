<?php

namespace App\Http\Controllers;

use App\bid;
use App\CertificateFiles;
use App\Certificates;
use App\CompanyDestinations;
use App\CompanyOffice;
use App\Review;
use App\ReviewImage;
use App\Routes;
use App\Subscription;
use App\TourFeatures;
use App\Tours;
use App\User;
use App\UserCardDetails;
use App\UserTokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use services\email_messages\ContactForm;
use services\email_messages\ForgotPasswordMessage;
use services\email_messages\InvitationMessageBody;
use services\email_services\EmailAddress;
use services\email_services\EmailBody;
use services\email_services\EmailMessage;
use services\email_services\EmailSender;
use services\email_services\EmailSubject;
use services\email_services\MailConf;
use services\email_services\PhpMail;
use services\email_services\SendEmailService;

class AuthController extends Controller
{

    public function operators(){
        $users = User::all();
        foreach ($users as $user){
            $user->offices = CompanyOffice::where('user_id',$user->id)->get();
            $user->destinations = CompanyDestinations::where('user_id',$user->id)->get();
            $user->tours = Tours::where('user_id', $user->id)->get();
            $user->reviews = Review::where('operator_id', $user->id)->get();
            $rating = 0;
            $count = 0;
            foreach ($user->reviews as $comment){
                if ((int)$comment->rating > 0){
                    $rating = $rating + (int)$comment->rating;
                    $count++;
                }
            }
            if ($rating > 0){
                $rating = $rating / $count;
            }else{
                $rating =  5;
            }
            $user->rating = round($rating, 1);
            $user->reviews = $count;
        }
        $offices= CompanyOffice::select('country')->distinct()->get();
        return view('operators')->with(['users' => $users, 'offices' => $offices, 'filtered' => false]);
    }

    public function viewUserFile($id){
        $file = User::where('id', $id)->first();
        $file = base_path('/data') . '/user-files' . '/' . $file->profile_pic;
        $type = mime_content_type($file);
        header('Content-Type:' . $type);
        header('Content-Length: ' . filesize($file));
        return readfile($file);
    }

    public function viewUserCompanyFile($id){
        $file = User::where('id', $id)->first();
        $file = base_path('/data') . '/user-files' . '/' . $file->company_logo;
        $type = mime_content_type($file);
        header('Content-Type:' . $type);
        header('Content-Length: ' . filesize($file));
        return readfile($file);
    }

    public function viewReviewImage($id){
        $file = ReviewImage::where('id', $id)->first();
        $file = base_path('/data') . '/review-files' . '/' . $file->image;
        $type = mime_content_type($file);
        header('Content-Type:' . $type);
        header('Content-Length: ' . filesize($file));
        return readfile($file);
    }

    public function viewOperatorProfile($id){
        $user = User::where('id', $id)->first();
        $user->offices = CompanyOffice::where('user_id', $user->id)->get();
        $user->destinations = CompanyDestinations::where('user_id', $user->id)->get();
        $user->tours = Tours::where('user_id', $user->id)->get();
        foreach ($user->tours as $item){
            $item->features = TourFeatures::where('tour_id', $item->id)->get();
            $item->routes = Routes::where('tour_id', $item->id)->get();
        }
//        $user->reviews= Review::where('operator_id', $user->id)->get();
        $user->reviews = Review::where([
            ['operator_id', '=', $user->id],
            ['status','=','approved']
        ])->get();
        $user->reviewsDeceding = Review::where([
            ['operator_id', $user->id],
            ['status','=','approved']
        ])->latest()->get();
        foreach ($user->reviewsDeceding as $review){
            $review->images = ReviewImage::where('review_id', $review->id)->get();
        }
        if (count($user->reviews) > 0){
            $user->isReviewAvailable = 1;
            $user->latestReview = Review::where([
                ['operator_id', $user->id],
                ['status','=','approved']
            ])->latest()->first();
        }else{
            $user->isReviewAvailable = 0;
        }

        $rating = 0;
        $count = 0;
        foreach ($user->reviews as $comment){
            if ((int)$comment->rating > 0){
                $rating = $rating + (int)$comment->rating;
                $count++;
            }
        }
        if ($rating > 0){
            $rating = $rating / $count;
        }else{
            $rating =  5;
        }
        $user->rating = round($rating, 1);
        $user->reviews = $count;

        return view('operators-profile')->with(['user' => $user]);
    }

    public function operatorReviewPage($id){
        $user = User::where('id', $id)->first();
        return view('operator-review')->with(['user'  => $user]);
    }

    public function saveReview(Request $request){
        $review = new Review();
        $review->month = $request->month;
        $review->year = $request->year;
        $review->rating = $request->rate;
        $review->title = $request->review_title;
        $review->review = $request->review;
        $review->name = $request->reviewer_name;
        $review->country = $request->country;
        $review->email = $request->reviewer_email;
        $review->operator_id = $request->operator_id;
        $review->save();
        if ($request->hasfile('reviewFiles')) {
            $files = $request->file('reviewFiles');
            foreach ($files as $file) {
                $name =  rand(0, 1000) .time() . '.' . $file->getClientOriginalExtension();
                $file->move(base_path('/data') . '/review-files' . '/', $name);
                $reviewImage = new ReviewImage();
                $reviewImage->review_id = $review->id;
                $reviewImage->image = $name;
                $reviewImage->save();
            }
        }
        return redirect('review-success');
    }

    public function reviewSuccess(){
        return view('review-success');
    }

    public function signup(Request $request)
    {
        try {
            if (!User::where('email', $request->emailAddress)->exists()) {
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->emailAddress;
                $user->company_name = $request->companyName;
                $user->company_size = $request->companysize;
                $user->telephone = $request->telephone;
                $user->tourtype = $request->tourtype;
                $user->foundedin = $request->foundedin;
                $user->pricerange = $request->pricerange;
                $user->overview = $request->overview;
                $user->description = $request->description;
                $randomPassword = $this->generateRandomString(10);
                $user->password = md5($randomPassword);

                if ($request->hasfile('profilepic')) {
                    $files = $request->file('profilepic');
                    foreach ($files as $file) {
                        $name =  rand(0, 1000) .time() . '.' . $file->getClientOriginalExtension();
                        $file->move(base_path('/data') . '/user-files' . '/', $name);
                        $user->profile_pic = $name;
                    }
                }

                if ($request->hasfile('companyLogo')) {
                    $files = $request->file('companyLogo');
                    foreach ($files as $file) {
                        $name =  rand(0, 1000) .time() . '.' . $file->getClientOriginalExtension();
                        $file->move(base_path('/data') . '/user-files' . '/', $name);
                        $user->company_logo = $name;
                    }
                }
                $result = $user->save();


                $office = new CompanyOffice();
                $office->address = $request->addressLineOne . $request->addressLineTwo;
                $office->city = $request->city;
                $office->postal_code = $request->postalCode;
                $office->state = $request->country;
                $office->country = $request->selectCountry;
                $office->user_id = $user->id;
                $office->save();

                $destinationslist = $request->destinationslist;
                foreach ($destinationslist as $item){
                    $destinations = new CompanyDestinations();
                    $destinations->country = $item;
                    $destinations->user_id = $user->id;
                    $destinations->save();
                }

                session()->flash('msg', 'Registration SuccessFull. Login Credentials sent to your email! Please check your inbox, junk or spam folder.');
                //Email
                $subject = new SendEmailService(new EmailSubject("Welcome to " . env('APP_NAME') . '. Here is your Credentials to Login!'));
                $mailTo = new EmailAddress($request->emailAddress);
                $invitationMessage = new ForgotPasswordMessage();
                $emailBody = $invitationMessage->invitationMessageBody($request->emailAddress , $randomPassword);
                $body = new EmailBody($emailBody);
                $emailMessage = new EmailMessage($subject->getEmailSubject(), $mailTo, $body);
                $sendEmail = new EmailSender(new PhpMail(new MailConf("smtp.gmail.com", "admin@dispatch.com", "secret-2021")));
                $result = $sendEmail->send($emailMessage);
                return redirect('login');
            } else {
                return redirect()->back()->withErrors(['Email Already Exists!']);
            }
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

    public function findprotectedwork(Request $request){
        try {
            if(Certificates::where('id', $request->id)->where('password', $request->password)->exists()){
                $certificate = Certificates::where('id', $request->id)->first();
                $certificate->files = CertificateFiles::where('certificate_id', $certificate->id)->get();
                $certificate->user = User::where('id', $certificate->user_id)->first();
                return view('view-certificate')->with(['certificate' => $certificate]);
            }else{
                return redirect()->back()->withErrors(['Invalid Reference Number or Password. Please Try Again!']);

            }
        }catch (\Exception $exception){
            return redirect()->back()->withErrors([$exception->getMessage()]);

        }

    }

    public function login(Request $request)
    {
        try {
            if (User::where('email', $request->email)->exists()) {
                $user = User::where('email', $request->email)->first();
                if ($user->password == md5($request->password)) {
                    if ($user->active == 0){
                        return redirect()->back()->withErrors(['You are blocked by admin. Please contact support@copyrightcover.com for further assistance.']);
                    }
                    Session::put('userId', $user->id);
                    return redirect('dashboard');
                } else {

                    return redirect()->back()->withErrors(['Invalid Credentials. Please Try Again!']);
                }
            } else {
                return redirect()->back()->withErrors(['Invalid Credentials. Please Try Again!']);
            }
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);

        }
    }

    public function logout()
    {
        try {
            Session::remove('userId');
            return json_encode(['status' => true]);
        } catch (\Exception $exception) {
            return json_encode(['status' => false]);
        }
    }

    public function sendmessage(Request $request){
        try {
            $subject = new SendEmailService(new EmailSubject($request->name ." contacted you from " . env('APP_NAME')));
            $mailTo = new EmailAddress('me.aliriaz007@gmail.com');
            $invitationMessage = new ContactForm();
            $emailBody = $invitationMessage->invitationMessageBody($request);
            $body = new EmailBody($emailBody);
            $emailMessage = new EmailMessage($subject->getEmailSubject(), $mailTo, $body);
            $sendEmail = new EmailSender(new PhpMail(new MailConf("smtp.gmail.com", "admin@dispatch.com", "secret-2021")));
            $result = $sendEmail->send($emailMessage);
            session()->flash('msg', 'Message Sent Successfully.');
            return redirect()->back();

        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }


    }

    public function about(){
        return view('about');
    }

    public function userAgreement(){
        return view('user-agreement');
    }

    public function privacyPolicy(){
        return view('privacy-policy');
    }

    public function filterOperator(Request $request)
    {
        $users = User::where('id', '!=' ,0);
        if (!empty($request->destination)) {
            $users->whereHas('company_destinations', function ($query) use ($request) {
                $query->where('company_destinations.country', $request->input('destination'));
            });
        }




        if (!empty($request->operator_company_name)) {
            $users->where('company_name','LIKE', "%{$request->input('operator_company_name')}%");
        }
//        if (!empty($request->cbpricerange)) {
//            $users->whereIn('pricerange',$request->cbpricerange);
//        }
        if (!empty($request->officeIn)) {
            $users->whereHas('company_offices', function ($query) use ($request) {
                $query->whereIn('company_offices.country', $request->officeIn);
            });
        }
        $users = $users->get();
        $temp = [];
        if (!empty($request->rating)) {
            foreach ($users as $user){
                $reviews =  Review::where('operator_id', $user->id)->get();
                $rating = 0;
                $count = 0;
                foreach ($user->reviews as $comment){
                    if ((int)$comment->rating > 0){
                        $rating = $rating + (int)$comment->rating;
                        $count++;
                    }
                }
                if ($rating > 0){
                    $rating = $rating / $count;
                }else{
                    $rating =  5;
                }
                $user->rating = round($rating, 1);
                $user->reviews = $count;

                if ($user->rating >= $request->rating){
                    array_push($temp, $user);
                }
            }
            $users = $temp;

        }
        foreach ($users as $user){
            $user->offices = CompanyOffice::where('user_id',$user->id)->get();
            $user->destinations = CompanyDestinations::where('user_id',$user->id)->get();
            $user->tours = Tours::where('user_id', $user->id)->get();
            $user->reviews = Review::where('operator_id', $user->id)->get();
            $rating = 0;
            $count = 0;
            foreach ($user->reviews as $comment){
                if ((int)$comment->rating > 0){
                    $rating = $rating + (int)$comment->rating;
                    $count++;
                }
            }
            if ($rating > 0){
                $rating = $rating / $count;
            }else{
                $rating =  5;
            }
            $user->rating = round($rating, 1);
            $user->reviews = $count;
        }
        $offices= CompanyOffice::select('country')->distinct()->get();
        return view('operators')->with(['users' => $users, 'offices' => $offices, 'filtered' => true, 'destination' => $request->destination, 'operator' => $request->operator_company_name, 'officesIn' => $request->officeIn, 'rating' =>$request->rating]);
    }

    public function bidOnTourPage($id){
        $user = User::where('id', $id)->first();
        $user->offices = CompanyOffice::where('user_id', $user->id)->get();
        $user->destinations = CompanyDestinations::where('user_id', $user->id)->get();
        $user->tours = Tours::where('user_id', $user->id)->get();
        foreach ($user->tours as $item){
            $item->features = TourFeatures::where('tour_id', $item->id)->get();
            $item->routes = Routes::where('tour_id', $item->id)->get();
        }
        $user->reviews = Review::where('operator_id', $user->id)->get();
        $user->reviewsDeceding = Review::where('operator_id', $user->id)->latest()->get();
        foreach ($user->reviewsDeceding as $review){
            $review->images = ReviewImage::where('review_id', $review->id)->get();
        }
        if (count($user->reviews) > 0){
            $user->isReviewAvailable = 1;
            $user->latestReview = Review::where('operator_id', $user->id)->latest()->first();
        }else{
            $user->isReviewAvailable = 0;
        }

        $rating = 0;
        $count = 0;
        foreach ($user->reviews as $comment){
            if ((int)$comment->rating > 0){
                $rating = $rating + (int)$comment->rating;
                $count++;
            }
        }
        if ($rating > 0){
            $rating = $rating / $count;
        }else{
            $rating =  5;
        }
        $user->rating = round($rating, 1);
        $user->reviews = $count;

        return view('bid-on-tour')->with(['user' => $user]);
    }

    public function successBid($id){
        $user = User::where('id', $id)->first();
        return view('success-bid')->with(['user' => $user]);
    }

    public function postBidOnTour(Request $request){
        try{
            $bid = new bid();
            $bid->amount = $request->biddingAmount;
            $bid->name = $request->name;
            $bid->email = $request->email;
            $bid->country = $request->country;
            $bid->phone = $request->tel;
            $bid->tour_id = $request->selectedTour;
            $bid->tour_days = $request->selectedDays;
            $bid->start_date = $request->startDate;
            $bid->end_date = $request->endDate;
            $bid->adults = $request->adults;
            $bid->children = $request->children;
            $bid->message = $request->message;
            $bid->operator_id = $request->operator_id;
            $bid->save();
            return redirect('success-bid/' . $request->operator_id);
        }catch (\Exception $exception){
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }
}
