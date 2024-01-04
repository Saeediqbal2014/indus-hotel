<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // dd(" index");

        $images = Event::latest()->get();
        return view('admin.event.index', ['images' => $images]);
    }

    public function add_event()
    {
        // dd(" index");

        return view('admin.event.add-event');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            // Add validation rules for other fields as needed
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Assuming images are uploaded
        ]);

        // Create a new event instance
        $event = new Event;

        // Set the fields based on user input
        $event->title = $validatedData['title'];
        // ... set other fields

        // Initialize $uploadedImages as an empty array
        $uploadedImages = [];

        // Check if images are being uploaded
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $destinationPath = public_path() . '/event_images/';
                $image->move($destinationPath, $filename);
                $uploadedImages[] = $filename;
            }

            // Set the images field with the uploaded images
            $event->image = $uploadedImages;
        }

        // Save the new event
        $event->save();

        // Redirect back with a success message or return a JSON response
        return redirect()->back()->with('success', 'Event created successfully');
        // Alternatively, you can return a JSON response if needed
        // return response()->json([
        //     'success' => 'Event Created',
        //     'redirect' => route('event.all-event'),
        // ]);
    }

    public function update(Request $request, $eventId)
    {
        // Retrieve the existing event
        $event = Event::find($eventId);

        if (!$event) {
            // Handle case where the event is not found
            return response()->json(['error' => 'Event not found'], 404);
        }

        // Update other fields based on user input
        $event->title = $request->input('title');
        // ... update other fields

        // Initialize $uploadedImages as an empty array
        $uploadedImages = [];

        // Check if new images are being uploaded
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $destinationPath = public_path() . '/event_images/';
                $image->move($destinationPath, $filename);
                $uploadedImages[] = $filename;
            }

            // Update the images field with the new images
            $event->image = $uploadedImages;
        }

        // Save the updated event
        $event->save();

        return redirect()->back();
        // return response()->json([
        //     'success' => 'Event Updated',
        //     'redirect' => route('event.all-event'),
        // ]);
    }

    public function edit($id)
    {
        // dd($id);

        $event = Event::find($id);
        // dd($event);

        return view('admin.event.edit', ['event' => $event]);
    }

    // deleteevent
    public function deleteevent(Request $request, $id)
    {
        // dd($id);

        // Find the user by ID
        $event = Event::find($id);
        // Delete the user
        $event->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
