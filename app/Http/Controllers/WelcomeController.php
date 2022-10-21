<?php

namespace App\Http\Controllers;

use App\categories;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $categories = categories::latest()->take(6)->get();
        $users = User::where('type', 'vendor')
            ->whereHas('profile', function ($q) {
                $q->where('jobcategory_id', '!=', null);
            })
            ->latest()->take(10)->get();

        return view('welcome', compact('categories', 'users'));
    }

    public function search(Request $request)
    {
        $profiles = Profile::where('bio', 'like',  '%' . $request->search . '%')->with('user')->get();
        return view('search', compact('profiles'));
    }
}
