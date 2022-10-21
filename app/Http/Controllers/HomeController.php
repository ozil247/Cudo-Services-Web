<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->type == 'client'){
            return redirect()->route('welcome');
        }  else if ( Auth::user()->type == 'vendor'){
            return redirect()->route('dashboard');

        } else if ( Auth::user()->type == 'admin'){
            return redirect()->route('admin_dashboard');               //to redirect to different user type dashboard
        }
    }
}
