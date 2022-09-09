<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupportGroupController;
use App\Http\Controllers\PeerCounselingController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API route for login user
Route::post('/login', [LoginController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    // Route::get('/profile', function(Request $request) {
    //     return auth()->user();
    // });
    // API route for logout user
    Route::post('/logout', 'LoginController@logout');
    Route::resource('/profile', UserController::class);
    // Route::post('/profile/update', 'UserController@update');
    // Route::put('/post/{post:id}', 'PostController@update');
});

Route::post('/register', [RegisterController::class, 'store']);

// Virtual Support Group 
Route::get('/layanan/support-group/daftar', [SupportGroupController::class, 'index']);
Route::post('/layanan/support-group/daftar', [SupportGroupController::class, 'store']);
// Virtual Peer Counseling
Route::get('/layanan/peer-counseling/daftar', [PeerCounselingController::class, 'index']);
Route::post('/layanan/peer-counseling/daftar', [PeerCounselingController::class, 'store']);