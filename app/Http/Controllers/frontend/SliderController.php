<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        // dd(" index");
        $images = slider::latest()->get();
        return view('admin.slider.index', ['images' => $images]);
    }

    public function add_slider()
    {
        // dd(" index");

        return view('admin.slider.add-slider');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $slider = $request->all();
        if ($request->slider_id != null) {
            $slider_update = slider::find($request->slider_id);
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $destinationPath = public_path() . '/slider_images/';
            $image->move($destinationPath, $filename);
            // dd($filename);
            $slider['image'] = $filename;
        } elseif ($request->slider_id != null && $request->hasFile('image') == null) {
            $slider['image'] = $slider_update->image;
        }
        if ($request->slider_id != null) {
            $slider_update->update($slider);
            $msg = 'slider Updated';
            // dd($msg);
        } else {
            slider::create($slider);
            $msg = 'slider Inserted';
            // dd($msg);
            return response()->json([
                'success' => 'Data Inserted',
                'redirect' => route('slider.all-slider'),
            ]);
        }
        return response()->json([
            'success' => 'Data updated',
            'redirect' => route('slider.all-slider'),
        ]);
        // return redirect('admin/all-slider');
    }


    public function edit($id)
    {
        // dd("edit");

        $slider = slider::find($id);

        return view('admin.slider.add-slider', ['slider' => $slider]);
    }

    // deleteslider
    public function deleteslider(Request $request, $id)
    {
        // dd($id);

        // Find the user by ID
        $slider = slider::find($id);
        // Delete the user
        $slider->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
