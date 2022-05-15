<?php

use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

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

Route::get('register', [RegisteredUserController::class, 'create'])->middleware('protected.by.invite.codes')->name('register');
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('user/invitation', [InvitationController::class, 'showLink']);
});
