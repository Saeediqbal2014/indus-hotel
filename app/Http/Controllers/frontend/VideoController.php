<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        // dd(" index");
        $videos = Video::latest()->get();
        return view('admin.video.index', ['videos' => $videos]);
    }

    public function add_video()
    {
        // dd(" index");

        return view('admin.video.add-video');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $video = $request->all();
        if ($request->video_id != null) {
            $video_update = Video::find($request->video_id);
        }
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $filename = $video->getClientOriginalName();
            $destinationPath = public_path() . '/video_videos/';
            $video->move($destinationPath, $filename);
            // dd($filename);
            $video['video'] = $filename;
        } elseif ($request->video_id != null && $request->hasFile('video') == null) {
            $video['video'] = $video_update->video;
        }
        if ($request->video_id != null) {
            $video_update->update($video);
            $msg = 'video Updated';
            // dd($msg);
        } else {
            Video::create($video);
            $msg = 'video Inserted';
            // dd($msg);
            return response()->json([
                'success' => 'Data Inserted',
                'redirect' => route('video.all-video'),
            ]);
        }
        return response()->json([
            'success' => 'Data updated',
            'redirect' => route('video.all-video'),
        ]);
        // return redirect('admin/all-video');
    }


    public function edit($id)
    {
        // dd("edit");

        $video = Video::find($id);

        return view('admin.video.add-video', ['video' => $video]);
    }

    // deletevideo
    public function deletevideo(Request $request, $id)
    {
        // dd($id);

        // Find the user by ID
        $video = video::find($id);
        // Delete the user
        $video->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
