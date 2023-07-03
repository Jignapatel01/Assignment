<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatHomeController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\LoginController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[CatHomeController::class,'index']);
Route::get("/register",[RegisterController::class,'index']);

Route::get("/contact-us",[ContactusController::class,'index']);
Route::post("/contact-us",[ContactusController::class,'store']);
Route::get("/login",[LoginController::class,'index']);


//Admin routing

Route::get("/admin-login",[AdminLoginController::class,'index']);
Route::get("/admin-login/admin-dashboard",[AdminHomeController::class,'index']);
Route::get("/admin-login/managecontact",[ContactusController::class,'show']);
Route::get("/admin-login/managecontact{id}",[ContactusController::class,'destroy']);