<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

/* Praktikum 1  */
Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    return '1941720009, Dandi Agung Setiawan';
});

Route::get('/artikel/{id}', function ($id) {
    echo 'Halaman Artikel ' .$id;
});


/* Praktikum 2
*/
// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'artikel']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
