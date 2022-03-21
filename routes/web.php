<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', [HomeController::class,'index']);
Route::get('/',[HomeController::class,'home']);
Route::get('/about',[HomeController::class,'aboutUs']);
Route::get('/contact',[HomeController::class,'contactUs']);
Route::get('/donate',[HomeController::class,'donate']);
Route::get('/videos',[HomeController::class,'videos']);
Route::get('/activities',[HomeController::class,'activities']);
Route::get('/sermony',[HomeController::class,'sermony']);
Route::get('/sermony-current-event',[HomeController::class,'currentEvent']);
Route::get('/sermony-temperence',[HomeController::class,'temperence']);
