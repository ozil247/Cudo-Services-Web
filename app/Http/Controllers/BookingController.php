<?php

namespace App\Http\Controllers;

use App\booking;
use App\categories;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{     //submiting booking form
    public function booking(Request $request )
    {
        $request->validate([
            'message' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required',
        ]);

        if (!$request->message) {
            return back()->with(['error' => 'Image and message cannot be empty']);
        }

        $user = User::find($request->vendor_id);

        $data = new booking();
        $data->user_id = Auth::user()->id;
        $data->vendor_id = $request->vendor_id;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->message = $request->message;

        $data->save();

        return view('provider_detail', compact('user'));

    }


    public function myBooking()
    {
        $bookings = booking::where('vendor_id', Auth::user()->id)->latest()->take(10)->get();
       return view('my_booking', compact('bookings'));

    }




    public function allBooking($id)
    {
        $bookings = booking::where('vendor_id', $id)->latest()->take(10)->get();
       return view('all_booking', compact('bookings'));
    }

    public function providerDetail($id)
    {
        $goat = User::find($id);
        $categories = categories::all();
        return view('provider_detail',compact('goat','categories'));
    }

}
