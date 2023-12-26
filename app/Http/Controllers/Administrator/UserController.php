<?php

namespace App\Http\Controllers\Administrator;

use App\Helpers\CommonHelpers;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index()
    {
        abort_if(!Gate ::allows('view', 'User'), 404);

        $users = User::with('role_data')->latest()->get();
        return view("admin.user.index", compact("users"));

    }
    function create()
    {
        abort_if(!Gate ::allows('insert', 'User'), 404);

        $roles = Role::orderBy('name', 'ASC')->get();
        return view("admin.user.user", compact("roles"));

    }
    function store(Request $request)
    {
        abort_if(!Gate ::allows('insert', 'User'), 404);

        $input = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ]);
        $input['password'] = bcrypt($input['password']);
        if ($request->user_id != null) {
            $user = User::find($request->user_id);
            $user->update($input);
            $msg = "User Updated ";

        } else {
            User::create($input);
            $msg = "User Added";
        }

        return response()->json([
            'success' => $msg,
            'redirect' => route('user.index')
        ]);

    }
    function edit($id)
    {
        abort_if(!Gate ::allows('update', 'User'), 404);

        $user = User::find($id);
        $roles = Role::orderBy('name', 'ASC')->get();
        return view("admin.user.user", compact("roles", "user"));

    }
    function delete($id)
    {
        abort_if(!Gate ::allows('delete', 'User'), 404);

        $user = User::find($id);
        $user->delete();
        return response()->json([
            'success' => 'User Deleted',
            'redirect' => route('user.index')
        ]);

    }
    function profile($id)
    {
        $user = User::with('role_data')->find($id);
        return view('admin.user.profile', compact('user'));
    }
    function edit_profile($id)
    {
        $user = User::with('role_data')->find($id);
        return view('admin.user.edit_profile', compact('user'));
    }
    function profile_update(Request $request)
    {
        $user = User::find($request->id);
        $data = $request->all();
        if ($request->password != '') {
            $data['password'] = bcrypt($data['password']);
        } else {
            $data['password'] = $user->password;
        }
        if ($request->hasFile('img')) {
            $image = CommonHelpers::uploadProfileImage($request->file('img'), 'images/users/', null);
            if (is_array($image)) {
                return response()->json($image);
            }
            $data['img'] = $image;
        } else {
            $data['img'] = $user->img;
        }
        $user->update($data);
        return response()->json([
            'success' => 'User Profile Updated',
            'reload' => true
        ]);
    }

}
