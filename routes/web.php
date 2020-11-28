<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\Page1Controller;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
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

Route::get("/", [Page1Controller::class, "index"])->name("page1");
Route::get("/admin", [AdminController::class, "index"])->name("admin");
Route::resource("/admin/about", AboutController::class);
Route::resource("/admin/skill", SkillController::class);
Route::resource("/admin/fact", FactController::class);
Route::resource("/admin/portfolio", PortfolioController::class);




