<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TabController;
use App\Http\Controllers\KosController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [UserController::class, 'index'])->name('index');

Route::middleware(['guest'])->group(function(){
    Route::get('register',[UserController::class, 'register'])->name('register');
    Route::post('register',[UserController::class, 'register_action'])->name('register.action');
    Route::get('login',[UserController::class, 'login'])->name('login');
    Route::post('login',[UserController::class, 'login_action'])->name('login.action');
});

Route::get('/home',function(){
    return redirect('/');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/logout',[UserController::class, 'logout'])->name('logout');
});

Route::get('/favorit', [UserController::class, 'favorit'])->name('favorit');
Route::get('/detail', [UserController::class, 'detail'])->name('detail');
Route::get('/kos_saya', [UserController::class, 'kos_saya'])->name('kos_saya');
Route::get('/ubah_profil', [UserController::class, 'ubah_profil'])->name('ubah_profil');


Route::get('/booking',function(){
    return view('/booking/booking');
})->name('booking');

Route::get('/koses', [KosController::class, 'index']);

Route::get('/admin',[AdminController::class, 'index'])->name('kos.list');
Route::get('/admin/kos',[AdminController::class, 'dataKos'])->name('kos.dataKos');
Route::get('/create',[AdminController::class, 'create'])->name('admin.create');
Route::post('/create',[AdminController::class, 'store'])->name('admin.store');

// Route::get('/', function () {
//     return view('welcome');
// });