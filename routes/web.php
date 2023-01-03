<?php

use App\Http\Controllers\TrendController;
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

Route::get("/",[TrendController::class,"index"]);
Route::get("/sitemap.xml",[TrendController::class,"sitemap"]);
Route::get("/{county}",[TrendController::class,"county"]);
Route::get("/{county}/{state}",[TrendController::class,"state"]);