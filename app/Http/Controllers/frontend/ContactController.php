<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;

use App\Models\EmailConfiguration;
use App\Http\Controllers\EmailConfigController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        // dd(" index");
        $contacts = Contact::latest()->get();
        return view('admin.contact.index', ['contacts' => $contacts]);
    }


    public function store(Request $request)
    {
        // dd($request->all());

        $contact = $request->all();
        // dd($contact);

        Contact::create($contact);
        $this->set_confg();
        $recipient = User::first();

        if ($recipient) {
            try {
                \Mail::to($recipient->send_mail)->send(new \App\Mail\ContactMail($contact));
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
            // Handle case where recipient is not found in the database
            $errorMsg = 'Recipient not found in the database';
            return redirect()->back()->with('error', $errorMsg);
        }
    }

    function set_confg(){
        $emailSettings = EmailConfiguration::first();
        Config::set([
            'mail.mailers.smtp.transport' => 'smtp',
            'mail.mailers.smtp.host' => $emailSettings->email_host,
            'mail.mailers.smtp.port' => $emailSettings->email_port,
            'mail.mailers.smtp.username' => $emailSettings->email_username,
            'mail.mailers.smtp.password' => $emailSettings->email_password,
            'mail.mailers.smtp.encryption' => 'tls',
        ]);
    }
    public function delete(Request $request, $id)
    {
        // dd($id);

        // Find the user by ID
        $beauty = Contact::find($id);
        // Delete the user
        $beauty->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
