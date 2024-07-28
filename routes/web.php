<?php


use App\Http\Controllers\HomeController as GuestHomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\GuestHomeController::class, 'index'])->name('home');

// Route::get('admin/home', [App\Http\Controllers\AdminHomeController::class, 'index'])->name('admin.home');
Route::middleware('auth')->name('admin.')->prefix('admin/')->group(function(){
    }
);

