<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatHomeController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\AddFacultyController;
use App\Http\Controllers\Admin\AddCollegeController;
use App\Http\Controllers\Admin\departmentcontroller;


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

//add college
Route::get("/admin-login/addcollege",[AddCollegeController::class,'index']); 
Route::post("/admin-login/addcollege",[AddCollegeController::class,'store']);
Route::get("/admin-login/managecollege",[AddCollegeController::class,'show']);
Route::get("/admin-login/managecollege/{id}",[AddCollegeController::class,'destroy']);
Route::get("/admin-login/editcollege/{id}",[AddCollegeController::class,'edit']);
Route::post("admin-login/editcollege/{id}",[AddCollegeController::class,'update']);

//add department
Route::get("/admin-login/adddepartment",[departmentcontroller::class,'index']); 
Route::post("/admin-login/adddepartment",[departmentcontroller::class,'store']);
Route::get("/admin-login/managedepartment",[departmentcontroller::class,'show']);
Route::get("/admin-login/managedepartment/{id}",[departmentcontroller::class,'destroy']);
Route::get("/admin-login/editdepartment/{id}",[departmentcontroller::class,'edit']);
Route::post("/admin-login/editdepartment/{id}",[departmentcontroller::class,'update']);


//add faculty
Route::get("/admin-login/addfaculty",[AddFacultyController::class,'index']); 
Route::post("/admin-login/addfaculty",[AddFacultyController::class,'store']);
Route::get("/admin-login/managefaculty",[AddFacultyController::class,'show']);
Route::get("/admin-login/managefaculty/{id}",[AddFacultyController::class,'destroy']);
Route::get("/admin-login/editfaculty/{id}",[AddFacultyController::class,'edit']);
Route::post("/admin-login/editfaculty/{id}",[AddFacultyController::class,'update']);
