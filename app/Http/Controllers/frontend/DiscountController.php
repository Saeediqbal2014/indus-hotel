<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        // dd(" index");
        $images = Discount::latest()->get();
        return view('admin.discount.index', ['images' => $images]);
    }

    public function add_discount()
    {
        // dd(" index");

        return view('admin.discount.add-discount');
    }

    public function store(Request $request)
    {

       
        // dd($request->all());

        $discount = $request->all();
        if ($request->discount_id != null) {
            $discount_update = Discount::find($request->discount_id);
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $destinationPath = public_path() . '/discount_images/';
            $image->move($destinationPath, $filename);
            // dd($filename);
            $discount['image'] = $filename;
        } elseif ($request->discount_id != null && $request->hasFile('image') == null) {
            $discount['image'] = $discount_update->image;
        }
        if ($request->discount_id != null) {
            $discount_update->update($discount);
            $msg = 'discount Updated';
            // dd($msg);
        } else {
            Discount::create($discount);
            $msg = 'discount Inserted';
            // dd($msg);
            return response()->json([
                'success' => 'Data Inserted',
                'redirect' => route('discount.all-discount'),
            ]);
        }
        return response()->json([
            'success' => 'Data updated',
            'redirect' => route('discount.all-discount'),
        ]);
        // return redirect('admin/all-discount');
    }


    public function edit($id)
    {
        // dd("edit");

        $discount = Discount::find($id);

        return view('admin.discount.add-discount', ['discount' => $discount]);
    }

    // deletediscount
    public function deletediscount(Request $request, $id)
    {
        // dd($id);

        // Find the user by ID
        $discount = Discount::find($id);
        // Delete the user
        $discount->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
