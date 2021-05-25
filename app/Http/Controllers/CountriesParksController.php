<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountriesParksController extends Controller
{
    public function viewCountriesParksPage()
    {
        return view('countries-parks');
    }

}
