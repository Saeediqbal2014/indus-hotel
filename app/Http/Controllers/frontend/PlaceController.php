<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{

    public function index()
    {
        // dd(" index");
        $images = Place::latest()->get();
        return view('admin.place.index', ['images' => $images]);
    }

    public function add_place()
    {
        // dd(" index");

        return view('admin.place.add-place');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $place = $request->all();
        if ($request->place_id != null) {
            $place_update = Place::find($request->place_id);
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $destinationPath = public_path() . '/place_images/';
            $image->move($destinationPath, $filename);
            // dd($filename);
            $place['image'] = $filename;
        } elseif ($request->place_id != null && $request->hasFile('image') == null) {
            $place['image'] = $place_update->image;
        }
        if ($request->place_id != null) {
            $place_update->update($place);
            $msg = 'place Updated';
            // dd($msg);
        } else {
            Place::create($place);
            $msg = 'place Inserted';
            // dd($msg);
            return response()->json([
                'success' => 'Data Inserted',
                'redirect' => route('place.all-place'),
            ]);
        }
        return response()->json([
            'success' => 'Data updated',
            'redirect' => route('place.all-place'),
        ]);
        // return redirect('admin/all-place');
    }


    public function edit($id)
    {
        // dd("edit");

        $place = Place::find($id);

        return view('admin.place.add-place', ['place' => $place]);
    }

    // deleteplace
    public function deleteplace(Request $request, $id)
    {
        // dd($id);

        // Find the user by ID
        $place = Place::find($id);
        // Delete the user
        $place->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
