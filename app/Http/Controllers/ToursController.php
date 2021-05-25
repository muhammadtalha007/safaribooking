<?php

namespace App\Http\Controllers;

use App\Routes;
use App\TourFeatures;
use App\User;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    public function viewAllToursPage()
    {
        $tours = \App\Tours::all();
        foreach ($tours as $item)
        {
            $item->features = TourFeatures::where('tour_id', $item->id)->get();
            $item->routes = Routes::where('tour_id', $item->id)->get();
            $item->user = User::where('id', $item->user_id)->first();
        }

        return view('all-tours')->with(['tours' => $tours]);
    }

    public function viewTourDetailPage()
    {
        return view('tour-detail');
    }
}
