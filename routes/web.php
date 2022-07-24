<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', [PageController::class, "landing"]);
Route::get('/login', [LoginController::class, "index"])->name("login")->middleware("guest");
Route::get('/register', [RegisterController::class, "index"])->middleware("guest");
Route::post('/register', [RegisterController::class, "store"]);
Route::get('/dashboard', [DashboardController::class, "index"])->middleware("auth");
Route::post('/login', [LoginController::class, "auth"]);
Route::post('/logout', [LoginController::class, "logout"]);
Route::post('/info', [InfoController::class, "store"]);
Route::get('/create', [ServiceController::class, "create"])->middleware(["auth", "roleauth"]);
Route::post('/create', [ServiceController::class, "store"]);
Route::get("/explore", [ServiceController::class, "index"]);
Route::get('/services/{service}', [ServiceController::class, "show"]);
Route::post('/buy', [OrderController::class, "store"]);
Route::post('/finishorder', [OrderController::class, "finish"]);
Route::delete("/services", [ServiceController::class, "destroy"]);
Route::get('/services/edit/{service}', [ServiceController::class, "edit"])->middleware(["auth", "roleauth"]);
Route::put('/services/edit/{service}', [ServiceController::class, "update"]);
Route::get("/admin", [AdminController::class, "index"])->middleware("auth", "adminauth");
Route::post("/accept", [InfoController::class, "accept"]);
Route::post("/reject", [InfoController::class, "reject"]);