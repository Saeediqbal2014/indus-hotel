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
        $videos = Video::get();
        return view('admin.video.index', ['videos' => $videos]);
    }

    public function add_video()
    {
        // dd(" index");

        return view('admin.video.add-video');
    }

    public function store(Request $request)
    {
        $videoData = $request->all();

        // If video_id is present, it means it's an update
        if ($request->has('video_id') && $request->video_id != null) {
            $video_update = Video::find($request->video_id);
        }

        // Handle file upload
        if ($request->hasFile('video')) {
            $videoFile = $request->file('video');
            $filename = $videoFile->getClientOriginalName();
            $destinationPath = public_path() . '/video_videos/';
            $videoFile->move($destinationPath, $filename);
            $videoData['video'] = $filename;
        } elseif (isset($video_update) && $video_update->video != null) {
            // If no file is uploaded in the update, retain the existing video file
            $videoData['video'] = $video_update->video;
        }

        // Update or create the video record
        if (isset($video_update)) {
            $video_update->update($videoData);
            $msg = 'Video Updated';
        } else {
            Video::create($videoData);
            $msg = 'Video Inserted';

            return response()->json([
                'success' => $msg,
                'redirect' => route('video.all-video'),
            ]);
        }

        return response()->json([
            'success' => $msg,
            'reload' => true
            // 'redirect' => route('video.all-video'),
        ]);
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
