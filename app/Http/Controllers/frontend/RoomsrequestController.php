<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Roomsrequest;
use App\Models\User;
use App\Http\Controllers\EmailConfigController;
use App\Models\EmailConfiguration;
use Illuminate\Support\Facades\Config;
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


        $emailSettings = EmailConfiguration::first();
        Config::set([
            'mail.mailers.smtp.transport' => 'smtp',
            'mail.mailers.smtp.host' => $emailSettings->email_host,
            'mail.mailers.smtp.port' => $emailSettings->email_port,
            'mail.mailers.smtp.username' => $emailSettings->email_username,
            'mail.mailers.smtp.password' => $emailSettings->email_password,
            'mail.mailers.smtp.encryption' => 'tls',
        ]);


        if ($emailSettings) {
            try {
                \Mail::to($emailSettings->email)->send(new \App\Mail\roomsrequestMail($validatedData, $emailSettings));
                $msg = 'Send your request';
                return response()->json([
                    'success' => $msg,
                    'reload' => true,
                ]);
            } catch (\Exception $e) {
                $errorMsg = 'Error sending email: ' . $e->getMessage();
                return response()->json([
                    'success' => 'Not Send your request',
                    'reload' => true,
                ]);
            }
        } else {
            // Handle case where recipient or email settings are not found in the database
            $errorMsg = 'Recipient or email settings not found in the database';
            return redirect()->back()->with('error', $errorMsg);
        }
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
