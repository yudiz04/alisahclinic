<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'index']);
Route::resource('appointment', AppointmentController::class);
Route::get('/getdoctor/{specialist}', [App\Http\Controllers\LandingController::class, 'getdoctor'])->name('getdoctor');

Route::get('/register', [AuthController::class, 'registrasi'])->name('register');
Route::post('/register', [AuthController::class, 'registrasiStore']);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth', 'super']], function(){
Route::get('/home', [HomeController::class, 'index']);
Route::resource('specialist', SpecialistController::class);
Route::resource('doctor', DoctorController::class);
// Route::resource('appointment', AppointmentController::class);
});