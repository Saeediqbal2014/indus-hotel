<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AccommodationCategory;
use App\Models\Accommodation;
use App\Models\Beauty;
use App\Models\Dinein;
use App\Models\Discount;
use App\Models\Facility;
use App\Models\Event;
use App\Models\Place;
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
        $roomTypes = AccommodationCategory::all();
        $accommodations = Accommodation::all();

        return view('frontend.index', compact('images', 'welcome', 'about', 'facility', 'discounts', 'vidoes', 'roomTypes', 'accommodations'));
    }

    public function about()
    {
        $about = About::first();
        $roomTypes = AccommodationCategory::all();

        return view('frontend.about', compact('about', 'roomTypes'));
    }

    public function accommodation()
    {
        $roomTypes = AccommodationCategory::all();
        $accommodations = Accommodation::all();

        return view('frontend.accommodation', compact('roomTypes', 'accommodations'));
    }

    public function meet()
    {

        $events = Event::get();
        $roomTypes = AccommodationCategory::all();


        return view('frontend.meeting-and-event', compact('events', 'roomTypes'));
    }

    public function dinein()
    {
        $roomTypes = AccommodationCategory::all();

        $dineins = Dinein::get();
        return view('frontend.dine-in', compact('dineins', 'roomTypes'));
    }
    public function beauty()
    {
        $roomTypes = AccommodationCategory::all();

        $beauty = Beauty::get();
        return view('frontend.beauty-and-wellness', compact('beauty', 'roomTypes'));
    }

    public function hyderabad_attractions()
    {
        $roomTypes = AccommodationCategory::all();

        $places = Place::get();

        return view('frontend.hyderabad-attractions', compact('places', 'roomTypes'));
    }

    public function contact()
    {
        $roomTypes = AccommodationCategory::all();

        return view('frontend.contact', compact('roomTypes'));
    }

    public function delux(Request $request, $id)
    {
        $roomTypes = AccommodationCategory::all();
        $room_name = Accommodation::where('accommodation_cat_id', $id)->first();
        $accommodations = Accommodation::where('accommodation_cat_id', $id)->get();
        return view('frontend.deluxe_rooms', compact('accommodations', 'roomTypes', 'room_name'));
    }

    public function single_room(Request $request, $id)
    {
        // dd($id);
        $roomTypes = AccommodationCategory::all();
        $room_name = Accommodation::where('accommodation_cat_id', $id)->first();
        $accommodations = Accommodation::where('accommodation_cat_id', $id)->get();
        $rooms = Accommodation::where('id', $id)->first();
        // dd($rooms);

        return view('frontend.single_room', compact('accommodations', 'roomTypes', 'room_name', 'rooms'));
    }
}
