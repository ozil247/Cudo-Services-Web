<?php

namespace App\Http\Controllers;

use App\categories;
use App\JobCategory;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VendorsController extends Controller
{


    public function dashboard()
    {
        return view('dashboard');
    }

    public function vprofile()
    {

        $profile = Auth::user()->profile;
        $users = Auth::user()->profile;
        $categories = categories::all();
        return view('vendors_profile', compact('profile','categories','users'));
    }

    public function profile(Request $request)
    {
        $data = Auth::user()->profile;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->bio = $request->bio;
        $data->location = $request->location;
        $data->jobcategory_id = $request->jobcategory_id;



        if ($request->has('image')) {
            $image = $request->image;
            $extension = $image->getClientOriginalExtension();
            $filename = $request->title . uniqid() . '.' . $extension;
            $request->file('image')->storePubliclyAs('public/image', $filename);
            $data->image = $filename;
        }
        $data->save();

        return back();
    }

    public function services()
    {

        $categories = categories::all();
        $users = User::where('type', 'vendor')->latest()->take(10)->get();
        return view('services', compact('categories','users'));

    }

}
