<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        // dd(" index");
        $images = Facility::latest()->get();
        return view('admin.facility.index', ['images' => $images]);
    }

    public function add_facility()
    {
        // dd(" index");

        return view('admin.facility.add-facility');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $facility = $request->all();
        if ($request->facility_id != null) {
            $facility_update = Facility::find($request->facility_id);
        }

        if ($request->facility_id != null) {

            $facility_update->update($facility);
            $msg = 'facility Updated';
            // dd($msg);
        } else {
            Facility::create($facility);
            $msg = 'facility Inserted';
            // dd($msg);
            return response()->json([
                'success' => 'Data Inserted',
                'reload' => true
            ]);
        }
        return response()->json([
            'success' => 'Data updated',
            'reload' => true

        ]);
        // return redirect('admin/all-facility');
    }

    public function edit($id)
    {
        // dd("edit");

        $facility = Facility::find($id);

        return view('admin.facility.add-facility', ['facility' => $facility]);
    }

    // delete facility

    public function deletefacility(Request $request, $id)
    {
        // dd($id);
        // Find the user by ID
        $facility = Facility::find($id);
        // Delete the user
        $facility->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
