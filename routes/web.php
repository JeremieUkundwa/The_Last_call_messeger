<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SermonController;
use App\Http\Controllers\VideoController;
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
Route::get('/',[HomeController::class,'home'])->name('home.index');
Route::get('/about',[HomeController::class,'aboutUs'])->name('home.about');
Route::get('/contact',[HomeController::class,'contactUs'])->name('home.contact');
Route::get('/donate',[HomeController::class,'donate'])->name('home.donate');
Route::get('/videos',[HomeController::class,'videos'])->name('home.videos');
Route::get('/activities',[HomeController::class,'activities'])->name('home.activities');
Route::get('/sermony',[HomeController::class,'sermony'])->name('sermony.sermony');
Route::get('/sermony-current-event',[HomeController::class,'currentEvent'])->name('sermony.sermony-current-event');
Route::get('/sermony-temperence',[HomeController::class,'temperence'])->name('sermony.sermony-temperence');
Route::get('/archive',[HomeController::class,'archive']) ->name('home.archive');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Route::resource('sermon',SermonController::class);
Route::resource('video',VideoController::class);