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
        return view('admin.accommodation.add-accommodation', compact('accommodation_cat', 'accommodation_packages'));
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
        ]);

        // dd('asasas');
        if ($request->hasFile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $destinationPath = public_path() . '/rooms_images/';
                $image->move($destinationPath, $filename);
                $uploadedImages[] = $filename;
            }

            // $json_images = json_encode($uploadedImages);
            // $imagesArray = json_decode($json_images, true);
            if (isset($request->update_images)) {
                $json_image = array_merge($uploadedImages, $request->update_images);
            }
            $json_images = json_encode($json_image);
        } else {
            $json_images = json_encode($request->update_images);
        }
        $package = json_encode($request->packages);
        $input['images'] = $json_images;
        $input['packages'] = $package;
        Accommodation::create($input);

        if ($request->accommodation_id != null) {
            $accommodation_update = Accommodation::find($request->accommodation_id);
            $accommodation_update->delete();
        }
        return redirect()->route('accommodation.all');

        // return response()->json([
        //     'success' => 'Accommodation Inserted',
        //     'redirect' => route('accommodation.all')
        // ]);
    }

    /**
     * Display the specified resource.
     */

    public function edit($id)
    {
        $accommodation = Accommodation::find($id);
        $accommodation_cat = AccommodationCategory::latest()->get();
        $accommodation_packages = AccommodationPackage::latest()->get();

        return view('admin.accommodation.add-accommodation', compact('accommodation', 'accommodation_packages', 'accommodation_cat'));
    }
    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accommodation $accommodation)
    {
    }

    /**
     * Remove the specified resource from storage.
     */

    public function delete_accommodation(Request $request, $id)
    {
        // dd($id);
        // Find the user by ID
        $accommodation = Accommodation::find($id);
        // Delete the user
        $accommodation->delete();
        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
