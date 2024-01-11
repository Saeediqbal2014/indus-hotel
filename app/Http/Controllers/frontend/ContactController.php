<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
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

        \Mail::to('raxa.kzx@gmail.com')->send(new \App\Mail\ContactMail($contact));
        $msg = 'Contact Inserted and Email Sent';
        return redirect()->back();
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
