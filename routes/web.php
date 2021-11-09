<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Components\ComponentController;

use App\Http\Controllers\Users\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/component',[ComponentController::class,'index'])->name('component')->middleware('auth');
Route::post('/store',[ComponentController::class,'store'])->name('store');
Route::get('/show',[ComponentController::class,'show'])->name('show')->middleware('auth');

//delete data page route
Route::get('delete/{id}',[ComponentController::class,'destroy'])->middleware('auth');

//edit data page route
Route::get('edit/{id}',[ComponentController::class,'edit'])->middleware('auth');


//update data page route
Route::post('update/{id}',[ComponentController::class,'update']);


//User data show
Route::get('/user_show',[UserController::class,'show'])->name('user_show')->middleware('auth');

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
