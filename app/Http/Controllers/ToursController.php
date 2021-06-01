<?php

namespace App\Http\Controllers;

use App\AccommodationAndMeal;
use App\Features;
use App\Review;
use App\Routes;
use App\TourActivities;
use App\TourFeatures;
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
        }

        return view('all-tours')->with(['tours' => $tours]);
    }

    public function viewTourDetailPage($tourId)
    {
        $tour = Tours::where('id', $tourId)->first();
        $companyName = User::where('id', $tour->user_id)->first()['company_name'];
        $foundedIn = User::where('id', $tour->user_id)->first()['foundedin'];
        $companySize = User::where('id', $tour->user_id)->first()['company_size'];
        $userId = User::where('id', $tour->user_id)->first()['id'];
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
        return view('tour-detail')->with(['review' => $review,'userId' => $userId, 'companySize' => $companySize, 'foundedIn' => $foundedIn, 'accommodationAndMeal' => $accommodationAndMeal, 'tourActivities' => $tourActivities, 'tourFeatures' => $tourFeatures, 'routes' => $routes, 'tour' => $tour, 'companyName' => $companyName, 'rating' => $rating, 'reviews' => $reviews]);
    }
}
