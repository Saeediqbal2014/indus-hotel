<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
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
}
