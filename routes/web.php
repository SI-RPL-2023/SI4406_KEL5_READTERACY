<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\HistoricalController;

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

// Authentication Account
Route::get('/account/auth/logout', [AuthController::class, "logout"]);
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

// Catalogue
Route::get('/Readteracy/catalogue', [CatalogueController::class, "catalogue_page"]);

// Genre Historical
Route::get('/Readteracy/genre/Historical', [HistoricalController::class, "viewPage_historical"]);
Route::get('/Readteracy/historical/addBook', [HistoricalController::class, "addBookHistorical_page"])->middleware('what_role');
Route::post('/Readteracy/historical/addBook/store', [HistoricalController::class, "addBookHistorical_store"])->middleware('what_role');
Route::get('/Readteracy/genre/Historical/{id}/delete', [HistoricalController::class, "destroy_book"])->middleware('what_role');

// Genre Education
Route::get('/Readteracy/genre/Education', [EducationController::class, "viewPage_education"]);
Route::get('/Readteracy/education/addBook', [EducationController::class, "addBookEducation_page"])->middleware('what_role');
Route::post('/Readteracy/education/addBook/store', [EducationController::class, "addBookEducation_store"])->middleware('what_role');
