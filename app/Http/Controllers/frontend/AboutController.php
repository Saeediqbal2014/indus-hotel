<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // dd(" index");
        $images = About::latest()->get();
        return view('admin.about.index', ['images' => $images]);
    }

    public function add_about()
    {
        // dd(" index");

        return view('admin.about.add-about');
    }

    public function store(Request $request)
    {
        // Validate the request data as needed

        $about = $request->all();

        // Check if about_id is present and retrieve the existing record
        if ($request->about_id != null) {
            $about_update = About::find($request->about_id);

            // Check if image is uploaded
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = $image->getClientOriginalName();
                $destinationPath = public_path() . '/about_images/';

                // Remove the old image file if it exists
                if (file_exists($destinationPath . $about_update->image)) {
                    unlink($destinationPath . $about_update->image);
                }

                // Move the new image to the destination path
                $image->move($destinationPath, $filename);
                $about['image'] = $filename;
            } else {
                // If no new image is uploaded, retain the old image
                $about['image'] = $about_update->image;
            }

            // Update the about record
            $about_update->update($about);
            $msg = 'About Updated';
        } else {
            // If about_id is not present, create a new record

            // Check if image is uploaded
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = $image->getClientOriginalName();
                $destinationPath = public_path() . '/about_images/';

                // Move the new image to the destination path
                $image->move($destinationPath, $filename);
                $about['image'] = $filename;
            }

            // Create a new about record
            About::create($about);
            $msg = 'About Inserted';
        }

        return response()->json([
            'success' => 'Data Updated',
            'reload' => true,
        ]);
    }

    public function edit($id)
    {
        // dd("edit");

        $about = About::find($id);

        return view('admin.about.add-about', ['about' => $about]);
    }

    // deleteabout
    public function deleteabout(Request $request, $id)
    {
        // dd($id);

        // Find the user by ID
        $about = about::find($id);
        // Delete the user
        $about->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
