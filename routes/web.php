<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    return view('homeGuest');
});

Route::get('/Readteracy/home', function () {
    return view('home');
});

// Authentication
Route::get('/account/login-page', [AuthController::class, "login_page"]);
Route::get('/account/register', [AuthController::class, "register_page"]);
Route::post('/account/register/store', [AuthController::class, "register_store"]);
Route::post('/account/login/store',[AuthController::class,'login_store']);

// Profile
Route::get('/Readteracy/profile', [AuthController::class, "profile_page"]);
Route::put('/Readteracy/account/update', [AuthController::class, "update_profile"]);
Route::post('/Readteracy/account/{id}/profile-picture', [AuthController::class, "update_profilePic"]);
Route::get('/Readteracy/account/{id}/delete/profile-picture', [AuthController::class, "delete_profilePic"]);
Route::get('Readteracy/account/updateProfile', [AuthController::class, "update_profilePic2"])->name('updateProfilePicture');
    