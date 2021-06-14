<?php

use Illuminate\Support\Facades\Route;
//Mahasiswa
use App\Http\Controllers\Mahasiswa\ProfileController;
use App\Http\Controllers\Mahasiswa\AlbumAlumniController;
//Akademik
use App\Http\Controllers\Akademik\AlbumController;
use App\Http\Controllers\Akademik\DetailAlbumController;
use App\Http\Controllers\Akademik\AddProdiController;
use App\Http\Controllers\Akademik\AddUserMahasiswaController;
//All
use App\Http\Controllers\AlumniController;

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

//Akademik
Route::resource('album-akademik', AlbumController::class)->only([
    'index', 'edit', 'store', 'update' , 'destroy', 
])->middleware(['auth']);
Route::resource('detail-album-alumni/{id}', DetailAlbumController::class)->only([
    'index'
])->middleware(['auth']);
Route::resource('prodi', AddProdiController::class)->only([
    'index', 'edit', 'store', 'update' , 'destroy'
])->middleware(['auth']);
Route::resource('user-mahasiswa', AddUserMahasiswaController::class)->only([
    'index', 'edit', 'store', 'update' , 'destroy'
])->middleware(['auth']);
//Mahasiswa
Route::resource('album-alumni', AlbumAlumniController::class)->only([
    'index', 
])->middleware(['auth']);
Route::resource('profile', ProfileController::class)->only([
    'index', 'edit', 'store', 'update' , 'destroy'
])->middleware(['auth']);

//All
Route::get('/', function () {
    return view('auth.login');
});
Route::resource('alumni', AlumniController::class)->only([
    'index', 'edit', 'store', 'update' , 'destroy'
])->middleware(['auth']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



// Route::get('/dashboard-analytics', function () {
//     return view('pages.dashboard-analytics');
// });
// Route::get('/dahboard-ecommerce', function () {
//     return view('pages.dashboard-ecommerce');
// });

require __DIR__.'/auth.php';
