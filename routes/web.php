<?php

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

Route::get('/', function () {
    return view('welcome');
});

/** Praktikum 1 */
Route::get('/', function () {
    echo " Selamat Datang ";
});
Route::get('/about', function () {
    echo " NIM      : 2041720155 <br/>";
    echo " Nama     : Yoga Rahmahadi <br/>";
    echo " Kelas    : TI 2H <br/>";
});
Route::get('/articles/{id}', function ($id) {
    echo " Ini adalah halaman Artikel dengan ID : {$id} ";
});

// /** Praktikum 2 */
// /** Bagian 1 */
// Route::get('/', [PageController::class, 'index']);
// Route::get('/', [PageController::class, 'about']);
// Route::get('/', [PageController::class, 'articles']);

// /** Bagian 2 */
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [AboutController::class, 'about']);
// Route::get('/', [ArticlesController::class, 'articles']);