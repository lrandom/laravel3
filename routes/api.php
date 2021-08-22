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

Route::get('/users', function () {
   $users= \App\Models\User::all();
    return response()->json(['users' => $users], \Symfony\Component\HttpFoundation\Response::HTTP_OK);
});

Route::post('/login', function (Request $request) {
    $check = \Illuminate\Support\Facades\Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ]);

    if($check){
        $user = \App\Models\User::where('email', $request->email)->first();
        //dd($user);
        $token = $user->createToken('user')->accessToken;
        return response()->json(['token' => $token], 200);
    }
});
