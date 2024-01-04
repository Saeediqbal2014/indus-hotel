<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Dinein;
use App\Models\Discount;
use App\Models\Facility;
use App\Models\Event;
use App\Models\Slider;
use App\Models\Video;
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
        $vidoes = Video::first();
        $facility = Facility::first();
        return view('frontend.index', compact('images', 'welcome', 'about', 'facility', 'discounts', 'vidoes'));
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
        $events = Event::get();

        return view('frontend.meeting-and-event', compact('events'));
    }

    public function dinein()
    {
        $dineins = Dinein::get();
        return view('frontend.dine-in', compact('dineins'));
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
