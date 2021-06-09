<?php

namespace App\Http\Controllers;

use App\AccommodationAndMeal;
use App\CompanyDestinations;
use App\CompanyOffice;
use App\Features;
use App\Review;
use App\ReviewImage;
use App\Routes;
use App\TourActivities;
use App\TourFeatures;
use App\TourPhotos;
use App\Tours;
use App\User;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    public function viewAllToursPage()
    {
        $tours = \App\Tours::all();
        foreach ($tours as $item) {
            $item->features = TourFeatures::where('tour_id', $item->id)->get();
            $item->routes = Routes::where('tour_id', $item->id)->get();
            $item->user = User::where('id', $item->user_id)->first();
//            $item->offices = CompanyOffice::where('user_id',$item->user_id)->get();

        }
        $offices= CompanyOffice::select('country')->distinct()->get();
        return view('all-tours')->with(['tours' => $tours, 'offices' => $offices]);
    }

    public function viewTourDetailPage($tourId)
    {
        $tour = Tours::where('id', $tourId)->first();
        $companyName = User::where('id', $tour->user_id)->first()['company_name'];
        $foundedIn = User::where('id', $tour->user_id)->first()['foundedin'];
        $companySize = User::where('id', $tour->user_id)->first()['company_size'];
        $userId = User::where('id', $tour->user_id)->first()['id'];
        $reviewsDeceding = Review::where('operator_id', $userId)->latest()->get();
        foreach ($reviewsDeceding as $review){
            $review->images = ReviewImage::where('review_id', $review->id)->get();
        }
        $review = Review::where('operator_id', $userId)->latest()->first();
        $routes = Routes::where('tour_id', $tourId)->get();
        $tourActivities = TourActivities::where('tour_id', $tourId)->get();
        $accommodationAndMeal = AccommodationAndMeal::where('tour_id', $tourId)->get();

        $tourFeatures = TourFeatures::where('tour_id', $tourId)->get();
        foreach ($tourFeatures as $item) {
            $item['featureDetails'] = Features::where('id', $item->feature_id)->first();
        }

        $reviews = Review::where('operator_id', $tour->user_id)->get();
        $rating = 0;
        $count = 0;
        foreach ($reviews as $comment) {
            if ((int)$comment->rating > 0) {
                $rating = $rating + (int)$comment->rating;
                $count++;
            }
        }
        if ($rating > 0) {
            $rating = $rating / $count;
        } else {
            $rating = 5;
        }
        $rating = round($rating, 1);
        $reviews = $count;
        return view('tour-detail')->with(['reviewsDeceding' => $reviewsDeceding,'review' => $review,'userId' => $userId, 'companySize' => $companySize, 'foundedIn' => $foundedIn, 'accommodationAndMeal' => $accommodationAndMeal, 'tourActivities' => $tourActivities, 'tourFeatures' => $tourFeatures, 'routes' => $routes, 'tour' => $tour, 'companyName' => $companyName, 'rating' => $rating, 'reviews' => $reviews, 'filtered' => false]);
    }

    public function bidOnTourDetailPage($operatorId,$tourId){
        $user = User::where('id', $operatorId)->first();
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

        return view('bid-on-tour-detail-page')->with(['user' => $user, 'tourId' => $tourId]);
    }
}
