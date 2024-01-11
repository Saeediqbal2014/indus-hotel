<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Beauty;
use Illuminate\Http\Request;

class BeautyController extends Controller
{
    public function index()
    {
        // dd(" index");
        $images = Beauty::latest()->get();
        return view('admin.beauty.index', ['images' => $images]);
    }

    public function add_beauty()
    {
        // dd(" index");

        return view('admin.beauty.add-beauty');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $beauty = $request->all();
        if ($request->beauty_id != null) {
            $beauty_update = Beauty::find($request->beauty_id);
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $destinationPath = public_path() . '/beauty_images/';
            $image->move($destinationPath, $filename);
            // dd($filename);
            $beauty['image'] = $filename;
        } elseif ($request->beauty_id != null && $request->hasFile('image') == null) {
            $beauty['image'] = $beauty_update->image;
        }
        if ($request->beauty_id != null) {
            $beauty_update->update($beauty);
            $msg = 'beauty Updated';
            // dd($msg);
        } else {
            Beauty::create($beauty);
            $msg = 'beauty Inserted';
            // dd($msg);
            return response()->json([
                'success' => 'Data Inserted',
                'redirect' => route('beauty.all-beauty'),
            ]);
        }
        return response()->json([
            'success' => 'Data updated',
            'redirect' => route('beauty.all-beauty'),
        ]);
        // return redirect('admin/all-beauty');
    }


    public function edit($id)
    {
        // dd("edit");

        $beauty = Beauty::find($id);

        return view('admin.beauty.add-beauty', ['beauty' => $beauty]);
    }

    // deletebeauty
    public function deletebeauty(Request $request, $id)
    {
        // dd($id);

        // Find the user by ID
        $beauty = Beauty::find($id);
        // Delete the user
        $beauty->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
