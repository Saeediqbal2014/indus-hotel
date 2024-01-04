<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Accommodation;
use App\Models\AccommodationCategory;
use App\Models\AccommodationPackage;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accommodations = Accommodation::with('accommodation_cat')->latest()->get();
        return view('admin.accommodation.index', ['accommodations' => $accommodations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accommodation_cat = AccommodationCategory::latest()->get();
        $accommodation_packages = AccommodationPackage::latest()->get();
        return view('admin.accommodation.add-accommodation', compact('accommodation_cat','accommodation_packages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input = $request->validate([
            'name' => 'required',
            'accommodation_cat_id' => 'required',
            'description' => 'required', 
            'bed' => 'required',
            'occupancy' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        if ($request->hasFile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $destinationPath = public_path() . '/dinein_images/';
                $image->move($destinationPath, $filename);
                $uploadedImages[] = $filename;
            }

            $json_images = json_encode($uploadedImages);
        }
        $package= json_encode($request->packages);
        $input['images'] = $json_images;
        $input['packages'] = $package;
        Accommodation::create($input);
        return response()->json([
            'success' => 'Accommodation Inserted',
            'redirect' => route('accommodation.all')
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Accommodation $accommodation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accommodation $accommodation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accommodation $accommodation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accommodation $accommodation)
    {
        //
    }
}
