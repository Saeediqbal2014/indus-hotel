<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Roomsrequest;
use App\Models\User;
use App\Http\Controllers\EmailConfigController;
use App\Models\EmailConfiguration;
use Illuminate\Http\Request;

class RoomsrequestController extends Controller
{
    public function index()
    {
        // dd(" index");
        $roomsrequests = Roomsrequest::latest()->get();
        return view('admin.roomsrequest.index', ['roomsrequests' => $roomsrequests]);
    }



    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'first_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'country' => 'required',
            'checkin' => 'required',
            'checkout' => 'required',
            'adults' => 'required',
            'children' => 'required',
            'room' => 'required',
            'special_arrangments' => 'required',


        ]);
        Roomsrequest::create($validatedData);
        $mail = User::first();
        \Mail::to($mail->send_mail)->send(new \App\Mail\roomsrequestMail($validatedData));
        $msg = 'roomsrequest Inserted and Email Sent';
        return response()->json([
            'success' => 'Send your request',
            'reload' => true,
        ]);
    }


    public function delete(Request $request, $id)
    {
        // dd($id);

        // Find the user by ID
        $roomsrequest = Roomsrequest::find($id);
        // Delete the user
        $roomsrequest->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}