<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Accommodation;
use App\Models\Beauty;
use App\Models\Contact;
use App\Models\Dinein;
use App\Models\Event;
use App\Models\Query;
use App\Models\Roomsrequest;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class DashboardController extends Controller
{

    public function index()
    {
        $rooms = Accommodation::count();
        $event = Event::count();
        $eventbookings = Query::count();
        $roombookings = Roomsrequest::count();
        $beauty = Beauty::count();
        $roomsrequests = Roomsrequest::take(5)->get();
        $queries = Query::take(5)->get();


        $contact = Contact::count();
        $contacts = Contact::take(6)->get();

        $resturent = Dinein::count();

        // dd($roombookings);
        return view('admin.dashboard', compact('rooms', 'event', 'eventbookings', 'contact', 'resturent', 'beauty', 'roombookings', 'roomsrequests', 'queries', 'contacts'));
    }
}
