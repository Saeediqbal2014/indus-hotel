<?php

namespace App\Http\Controllers;

use App\Models\EmailConfiguration;
use Illuminate\Http\Request;

class EmailConfigController extends Controller
{


    public function index()
    {
        // dd(" index");
        $images = EmailConfiguration::latest()->get();
        return view('admin.EmailConfiguration.index', ['images' => $images]);
    }

    public function add_EmailConfiguration()
    {
        // dd(" index");
        return view('admin.EmailConfiguration.add-EmailConfiguration');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $EmailConfiguration = $request->all();
        if ($request->EmailConfiguration_id != null) {
            $EmailConfiguration_update = EmailConfiguration::find($request->EmailConfiguration_id);
        }

        if ($request->EmailConfiguration_id != null) {
            $EmailConfiguration_update->update($EmailConfiguration);
            $msg = 'EmailConfiguration Updated';
            // dd($msg);
        } else {
            EmailConfiguration::create($EmailConfiguration);
            $msg = 'EmailConfiguration Inserted';
            dd($msg);
            return response()->json([
                'success' => 'Data Inserted',
                'reload' => true
            ]);
        }
        // dd('saas');
        return response()->json([
            'success' => 'Data updated',
            'reload' => true

        ]);
        // return redirect('admin/all-EmailConfiguration');
    }

    public function edit($id)
    {
        // dd("edit");

        $EmailConfiguration = EmailConfiguration::find($id);

        return view('admin.EmailConfiguration.add-EmailConfiguration', ['EmailConfiguration' => $EmailConfiguration]);
    }

    // deleteEmailConfiguration
    public function deleteEmailConfiguration(Request $request, $id)
    {
        // dd($id);

        // Find the user by ID
        $EmailConfiguration = EmailConfiguration::find($id);
        // Delete the user
        $EmailConfiguration->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }


    public function setConfig()
    {
        $credentials = EmailConfiguration::first();

        if ($credentials) {
            Config::set('mail.username', $credentials->email_username);
            Config::set('mail.password', $credentials->email_password);

            return response()->json(['message' => 'Email credentials set successfully'], 200);
        } else {
            return response()->json(['error' => 'Email credentials not found in the database'], 500);
        }
    }
}
