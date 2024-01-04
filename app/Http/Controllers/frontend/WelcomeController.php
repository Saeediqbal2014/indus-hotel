<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // dd(" index");
        $images = Welcome::latest()->get();
        return view('admin.welcome.index', ['images' => $images]);
    }

    public function add_welcome()
    {
        // dd(" index");
        return view('admin.welcome.add-welcome');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $welcome = $request->all();
        if ($request->welcome_id != null) {
            $welcome_update = welcome::find($request->welcome_id);
        }

        if ($request->welcome_id != null) {
            $welcome_update->update($welcome);
            $msg = 'welcome Updated';
            // dd($msg);
        } else {
            welcome::create($welcome);
            $msg = 'welcome Inserted';
            // dd($msg);
            return response()->json([
                'success' => 'Data Inserted',
                'reload' => true
            ]);
        }
        return response()->json([
            'success' => 'Data updated',
            'reload' => true

        ]);
        // return redirect('admin/all-welcome');
    }

    public function edit($id)
    {
        // dd("edit");

        $welcome = welcome::find($id);

        return view('admin.welcome.add-welcome', ['welcome' => $welcome]);
    }

    // deletewelcome
    public function deletewelcome(Request $request, $id)
    {
        // dd($id);

        // Find the user by ID
        $welcome = welcome::find($id);
        // Delete the user
        $welcome->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
