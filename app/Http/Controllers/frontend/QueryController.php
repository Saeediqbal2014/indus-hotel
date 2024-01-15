<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Query;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function index()
    {
        // dd(" index");
        $queries = Query::latest()->get();
        return view('admin.query.index', ['queries' => $queries]);
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'hall' => 'required',
            'event' => 'required',
            'date' => 'required',
            'comment' => 'required'

        ]);
        Query::create($validatedData);

        \Mail::to('raxa.kzx@gmail.com')->send(new \App\Mail\QueryMail($validatedData));
        $msg = 'query Inserted and Email Sent';
        return response()->json([
            'success' => 'Send your request',
            'reload' => true,
        ]);
    }


    public function delete(Request $request, $id)
    {
        // dd($id);

        // Find the user by ID
        $query = Query::find($id);
        // Delete the user
        $query->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
