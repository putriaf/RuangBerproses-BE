<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
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
use App\Http\Controllers\RegistrationProCounselingController;
use App\Http\Controllers\RegistrationPeerCounselingController;
use App\Http\Controllers\RegistrationSupportGroupController;
use App\Http\Controllers\RegistrationPsytalkController;
use App\Http\Controllers\RegistrationKelasBerprosesController;
use App\Http\Controllers\ScreeningController;

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
    Route::post('/logout', 'LoginController@logout');
    Route::resource('/profile', UserController::class);
    Route::put('/profile/{username}', [UserController::class, 'update']);
});

Route::post('/register', [RegisterController::class, 'store']);

// ADMIN
Route::get('/admin', [AdminController::class, 'index']);

// SCREENING
Route::post('/screening', [ScreeningController::class, 'store']);
Route::get('/admin/screening/{id}', [ScreeningController::class, 'show']);
Route::get('/admin/screening/user/{id}', [ScreeningController::class, 'showByUserID']);
Route::put('/admin/screening/{id}', [ScreeningController::class, 'update']);
Route::delete('/admin/screening/{users:id}', [ScreeningController::class, 'destroy']);

// LAYANAN
// Virtual Support Group 
Route::post('/admin/layanan/sg-list/tambah', [SupportGroupController::class, 'store']);
Route::get('/admin/layanan/sg-list/{id}', [SupportGroupController::class, 'show']);
Route::put('/admin/layanan/sg-list/{id}', [SupportGroupController::class, 'update']);
Route::delete('/admin/layanan/sg-list/{id}', [SupportGroupController::class, 'destroy']);
// Virtual Support Group Registration Data
Route::post('/layanan/support-group/daftar', [RegistrationSupportGroupController::class, 'store']);
Route::get('/layanan/support-group/{id}', [RegistrationSupportGroupController::class, 'show']);
Route::put('/admin/layanan/support-group/{id}', [RegistrationSupportGroupController::class, 'update']);
Route::delete('/admin/layanan/support-group/{id}', [RegistrationSupportGroupController::class, 'destroy']);
// Virtual Peer Counseling
Route::post('/admin/layanan/peercounseling-list/tambah', [PeerCounselingController::class, 'store']);
Route::get('/admin/layanan/peercounseling-list/{id}', [PeerCounselingController::class, 'show']);
Route::put('/admin/layanan/peercounseling-list/{id}', [PeerCounselingController::class, 'update']);
Route::delete('/admin/layanan/peercounseling-list/{id}', [PeerCounselingController::class, 'destroy']);
// Peer Counseling Registration Data
Route::post('/layanan/peer-counseling/daftar', [RegistrationPeerCounselingController::class, 'store']);
Route::get('/layanan/peer-counseling/{id}', [RegistrationPeerCounselingController::class, 'show']);
Route::put('/admin/layanan/peer-counseling/{id}', [RegistrationPeerCounselingController::class, 'update']);
Route::delete('/admin/layanan/peer-counseling/{id}', [RegistrationPeerCounselingController::class, 'destroy']);
// Professional Counseling
Route::post('/admin/layanan/procounseling-list/tambah', [ProfessionalCounselingController::class, 'store']);
Route::get('/admin/layanan/procounseling-list', [ProfessionalCounselingController::class, 'all']);
Route::get('/admin/layanan/procounseling-list/{id}', [ProfessionalCounselingController::class, 'show']);
Route::put('/admin/layanan/procounseling-list/{id}', [ProfessionalCounselingController::class, 'update']);
Route::delete('/admin/layanan/procounseling-list/{id}', [ProfessionalCounselingController::class, 'destroy']);
// Professional Counseling Registration Data
Route::get('/layanan/professional-counseling/daftar', [RegistrationProCounselingController::class, 'create']);
Route::post('/layanan/professional-counseling/daftar', [RegistrationProCounselingController::class, 'store']);
Route::get('/layanan/professional-counseling/{id}', [RegistrationProCounselingController::class, 'show']);
Route::put('/admin/layanan/professional-counseling/{id}', [RegistrationProCounselingController::class, 'update']);
Route::delete('/admin/layanan/professional-counseling/{id}', [RegistrationProCounselingController::class, 'destroy']);

// PROGRAM
// Psytalk
Route::post('/admin/program/psytalk-list/tambah', [PsytalkController::class, 'store']);
Route::get('/admin/program/psytalk-list/{id}', [PsytalkController::class, 'show']);
Route::put('/admin/program/psytalk-list/{id}', [PsytalkController::class, 'update']);
Route::delete('/admin/program/psytalk-list/{id}', [PsytalkController::class, 'destroy']);
// Psytalk Registration Data
Route::post('/program/psytalk/daftar', [RegistrationPsytalkController::class, 'store']);
Route::get('/program/psytalk/{id}', [RegistrationPsytalkController::class, 'show']);
Route::put('/admin/program/psytalk/{id}', [RegistrationPsytalkController::class, 'update']);
Route::delete('/admin/program/psytalk/{id}', [RegistrationPsytalkController::class, 'destroy']);
// Kelas Berproses
Route::post('/admin/program/kb-list/tambah', [KelasBerprosesController::class, 'store']);
Route::get('/admin/program/kb-list/{id}', [KelasBerprosesController::class, 'show']);
Route::put('/admin/program/kb-list/{id}', [KelasBerprosesController::class, 'update']);
Route::delete('/admin/program/kb-list/{id}', [KelasBerprosesController::class, 'destroy']);
// Kelas Berproses Registration Data
Route::post('/program/kelas-berproses/daftar', [RegistrationKelasBerprosesController::class, 'store']);
Route::get('/program/kelas-berproses/{id}', [RegistrationKelasBerprosesController::class, 'show']);
Route::put('/admin/program/kelas-berproses/{id}', [RegistrationKelasBerprosesController::class, 'update']);
Route::delete('/admin/program/kelas-berproses/{id}', [RegistrationKelasBerprosesController::class, 'destroy']);

// ARTIKEL
Route::get('/artikel-berproses', [ArtikelController::class, 'index']);
Route::post('/admin/artikel-berproses/tambah', [ArtikelController::class, 'store']);
Route::get('/artikel-berproses/{id}', [ArtikelController::class, 'show']);
Route::put('/admin/artikel-berproses/{id}', [ArtikelController::class, 'update']);
Route::delete('/admin/artikel-berproses/{id}', [ArtikelController::class, 'destroy']);