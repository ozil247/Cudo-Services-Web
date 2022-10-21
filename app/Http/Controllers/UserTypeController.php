<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    public function allVendors()
    {
        $vendors = User::where('type','vendor')->latest()->get();
        return view('all_vendors',compact('vendors'));
    }

    public function allUsers()
    {
        $users = User::where('type','client')->latest()->get();
        return view('all_users',compact('users'));
    }
}
