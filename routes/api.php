<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupportGroupController;
use App\Http\Controllers\PeerCounselingController;
use App\Http\Controllers\ProfessionalCounselingController;
use App\Http\Controllers\PsytalkController;
use App\Http\Controllers\KelasBerprosesController;

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

// LAYANAN
// Virtual Support Group 
Route::get('/layanan/support-group/daftar', [SupportGroupController::class, 'index']);
Route::post('/layanan/support-group/daftar', [SupportGroupController::class, 'store']);
// Virtual Peer Counseling
Route::get('/layanan/peer-counseling/daftar', [PeerCounselingController::class, 'index']);
Route::post('/layanan/peer-counseling/daftar', [PeerCounselingController::class, 'store']);
// Professional Counseling
Route::get('/layanan/professional-counseling/daftar', [ProfessionalCounselingController::class, 'index']);
Route::post('/layanan/professional-counseling/daftar', [ProfessionalCounselingController::class, 'store']);

// PROGRAM
// Psytalk
Route::get('/program/psytalk/daftar', [PsytalkController::class, 'index']);
Route::post('/program/psytalk/daftar', [PsytalkController::class, 'store']);
// Kelas Berproses
Route::get('/program/kelas-berproses/daftar', [KelasBerprosesController::class, 'index']);
Route::post('/program/kelas-berproses/daftar', [KelasBerprosesController::class, 'store']);