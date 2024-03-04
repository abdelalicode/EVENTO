<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::controller(AuthController::class)->group(function(){
    Route::get('signinview' , 'signinview')->name('signinview');
    Route::get('signupview' , 'signupview')->name('signupview');
    Route::post('signin' , 'signin')->name('signin');
    Route::post('signup' , 'signup')->name('signup');
    Route::post('organisator' , 'setorganisator')->name('organisator');
    Route::post('participant' , 'setparticipant')->name('participant');
});


