<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ForgetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganisatorController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

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

Route::get('/', [HomeController::class, 'index'])->name('homepage');


Route::controller(AuthController::class)->group(function(){
    Route::get('signinview' , 'signinview')->name('signinview');
    Route::get('signupview' , 'signupview')->name('signupview');
    Route::post('signin' , 'signin')->name('signin');
    Route::post('signup' , 'signup')->name('signup');
    Route::post('organisator' , 'setorganisator')->name('organisator');
    Route::post('participant' , 'setparticipant')->name('participant');
});



Route::middleware('can:access-admin')->get('/AdminDashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

// Route::middleware('can:access-organisateur')->get('/OrgaDashboard', [OrganisatorController::class, 'OrgaDashboard']);
// Route::middleware('can:access-organisateur')->get('/OrgaEvents', [OrganisatorController::class, 'OrgaEvents']);

Route::middleware('can:access-organisateur')->prefix('organisateur')->group(function () {
    Route::get('/dashboard', [OrganisatorController::class, 'OrgaDashboard'])->name('organisateur.dashboard');
    Route::get('/events', [OrganisatorController::class, 'OrgaEvents'])->name('organisateur.events');
});

Route::resource('event', EventController::class);
Route::resource('categorie', CategoryController::class);

Route::get('unapproved', [EventController::class, 'unapproved'])->name('unapproved');
Route::put('unapproved', [EventController::class, 'approve'])->name('approve.event');

Route::get('password/reset', [ForgetController::class, 'show'])->name('password.request');
Route::post('password/email', [ForgetController::class, 'sendlink'])->name('password.email');
Route::get('password/reset/{token}/{email}', [ForgetController::class, 'breset'])->name('password.reset');
Route::post('password/reseting', [ForgetController::class, 'resetPassword'])->name('resetPassword');


