<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Discount;
use App\Models\Facility;
use App\Models\Slider;
use App\Models\Welcome;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $welcome = Welcome::first();
        $about = About::first();
        $images = Slider::get();
        $discounts = Discount::get();

        $facility = Facility::first();


        return view('frontend.index', compact('images', 'welcome', 'about', 'facility', 'discounts'));
    }

    public function about()
    {
        $about = About::first();
        return view('frontend.about', compact('about'));
    }

    public function accommodation()
    {
        return view('frontend.accommodation');
    }

    public function meet()
    {
        return view('frontend.meeting-and-event');
    }

    public function dinein()
    {
        return view('frontend.dine-in');
    }
    public function beauty()
    {
        return view('frontend.beauty-and-wellness');
    }

    public function hyderabad_attractions()
    {
        return view('frontend.hyderabad-attractions');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function delux()
    {
        return view('frontend.deluxe_rooms');
    }
}
