<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Query;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Models\EmailConfiguration;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function index()
    {
        // dd(" index");
        $queries = Query::latest()->get();
        return view('admin.query.index', ['queries' => $queries]);
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'hall' => 'required',
            'event' => 'required',
            'date' => 'required',
            'comment' => 'required'

        ]);
        Query::create($validatedData);

        
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
                \Mail::to($emailSettings->email)->send(new \App\Mail\QueryMail($validatedData, $emailSettings));
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
        $query = Query::find($id);
        // Delete the user
        $query->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
