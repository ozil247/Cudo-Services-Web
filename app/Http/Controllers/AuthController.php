<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
     $request->validate([
            'type'=> 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);

        $user = new User();
        $user->type = $request->type;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);

        $user->save();

        event(new Registered($user));

        $token = $user->createToken('mobile');

        return response()->json([
            'status_code'=> true,
            'data' => $user,
            'token'=> $token->plainTextToken,
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        $user = Auth::attempt(['email' => $request->email, 'password'=> $request->password]);
        if(!$user)
        {
            return response()->json([
                'status_code' => 500,
                'massage' => 'Unauthorized'
            ]);
        }
        
         $tokenResult = $request->user()->createToken('authToken')->plainTextToken;

         return response()->json([
            'status_code' => 200,
            'data' => Auth::user(),
            'token' => $tokenResult
         ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'staus_code' => 200,
            'messge' => 'Token deleted successfully!'
         ]);
    }
}
