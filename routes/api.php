<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', 'AuthController@register')->name('register');

Route::post('/login', 'AuthController@login')->name('login');


Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/profile', 'AuthProfileController@authProfile')->name('auth.profile');
    Route::post('/update-profile', 'AuthProfileController@updateProfile')->name('update.profile');

    Route::post('/logout', 'AuthController@logout')->name('logout');
});
