<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Dinein;
use Illuminate\Http\Request;

class DineinController extends Controller
{
    public function index()
    {
        // dd(" index");
        $images = Dinein::latest()->get();
        return view('admin.dinein.index', ['images' => $images]);
    }

    public function add_dinein()
    {
        // dd(" index");

        return view('admin.dinein.add-dinein');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255', // Add this line for 'subtitle'
            'para' => 'required|string', // Add validation rules for other fields as needed
            'position' => 'required|string|max:255',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Assuming images are uploaded
        ]);

        // Create a new dinein instance
        $dinein = new Dinein;

        // Set the fields based on user input
        $dinein->title = $validatedData['title'];
        $dinein->subtitle = $validatedData['subtitle'];
        $dinein->para = $validatedData['para'];
        $dinein->position = $validatedData['position'];



        // ... set other fields

        // Initialize $uploadedImages as an empty array
        $uploadedImages = [];

        // Check if images are being uploaded
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $destinationPath = public_path() . '/dinein_images/';
                $image->move($destinationPath, $filename);
                $uploadedImages[] = $filename;
            }

            // Set the images field with the uploaded imagesss
            $dinein->image = json_encode($uploadedImages);
        }

        // Save the new dinein
        $dinein->save();

        // Redirect back with a success message or return a JSON response
        return redirect()->back()->with('success', 'dinein created successfully');
        // Alternatively, you can return a JSON response if needed
        // return response()->json([
        //     'success' => 'dinein Created',
        //     'redirect' => route('dinein.all-dinein'),
        // ]);
    }

    public function update(Request $request, $dineinId)
    {
        // Retrieve the existing dinein
        $dinein = Dinein::find($dineinId);

        if (!$dinein) {
            // Handle case where the dinein is not found
            return response()->json(['error' => 'Dinein not found'], 404);
        }

        // Update other fields based on user input
        $dinein->title = $request->input('title');
        $dinein->subtitle = $request->input('subtitle');
        $dinein->para = $request->input('para');
        $dinein->position = $request->input('position');
        // ... update other fields

        // Initialize $uploadedImages as an empty array
        $uploadedImages = [];

        // Check if new images are being uploaded
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $destinationPath = public_path() . '/dinein_images/';
                $image->move($destinationPath, $filename);
                $uploadedImages[] = $filename;
            }
        }

        // Update the images field with the new images as JSON
        $json_images = isset($request->update_images)
            ? array_merge($uploadedImages, $request->update_images)
            : $uploadedImages;

        $dinein->image = json_encode($json_images);


        // Save the updated dinein
        $dinein->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        // dd($id);

        $dinein = Dinein::find($id);
        // dd($dinein);

        return view('admin.dinein.edit', ['dinein' => $dinein]);
    }

    // deletedinein
    public function deletedinein(Request $request, $id)
    {
        // dd($id);
        // Find the user by ID
        $dinein = Dinein::find($id);
        // Delete the user
        $dinein->delete();
        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
