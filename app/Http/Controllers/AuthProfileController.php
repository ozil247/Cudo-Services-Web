<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthProfileController extends Controller
{
    public function authProfile()
    {
        return response()->json([
            'status_code'=> true,
            'data' => Auth::user(),
        ]);

    }

    public function updateProfile(Request $request)
    {
       
        $user =  Auth::user();
        $user->phone = $request->phone;
        $user->save();
        return response()->json([
            'status_code'=> true,
            'data' => Auth::user(),
        ]);
    }
    // public function updated(User $user)
    // {
    //     return view('vieworder.accept_order', compact('user'));
    // }

}
