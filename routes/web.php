<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SaleslogsController;


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
    return view('auth.login');
});

<<<<<<< HEAD
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/saleslogs',[SaleslogsController::class, 'index'])->name('admin.saleslogs');

});
=======
Route::get('/dashboard', function () {
    return view('admin-dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile-page', function(){
  return view('profile-page');
})->middleware(['auth'])->name('view.profile');

>>>>>>> e3122b167779fcafdb9fee02b0625fbecaeb7ba4
require __DIR__.'/auth.php';
