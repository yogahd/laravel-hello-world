<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Prak3\HomeController as DashboardController;
use App\Http\Controllers\Prak3\ProductsController;
use App\Http\Controllers\Prak3\NewsController;
use App\Http\Controllers\Prak3\ProgramController;
use App\Http\Controllers\Prak3\AboutController as AboutUsController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\sock\HomeController;
use App\Http\Controllers\sock\AboutController;
use App\Http\Controllers\sock\TestmonialController;
use App\Http\Controllers\sock\ClientsController;
use App\Http\Controllers\sock\ContactController;

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

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/hello', [WelcomeController::class,'hello']);

// /** Praktikum 1 */
// Route::get('/', function () {
//     echo " Selamat Datang ";
// });
// Route::get('/about', function () {
//     echo " NIM      : 2041720155 <br/>";
//     echo " Nama     : Yoga Rahmahadi <br/>";
//     echo " Kelas    : TI 2H <br/>";
// });
// Route::get('/articles/{id}', function ($id) {
//     echo " Ini adalah halaman Artikel dengan ID : {$id} ";
// });

// /** Praktikum 2 */
// /** Bagian 1 */
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// /** Bagian 2 */
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticlesController::class, 'articles']);

// /** Praktikum 3 */
// //Home
// Route::get('/', [DashboardController::class, 'index']);
// //Product
// Route::prefix('/products')->group(function(){
//     Route::get('/', [ProductsController::class, 'product']);
// });
// //News
// Route::get('/news', [NewsController::class, 'news']);
// //Program
// Route::get('/program/{id}', [ProgramController::class, 'program']);
// //About
// Route::get('/about', [AboutUsController::class, 'about']);




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Home
Route::get('/', [HomeController::class, 'index']);
//About
Route::get('/about', [AboutController::class, 'about']);
//Testmonial
Route::get('/testmonial', [TestmonialController::class, 'testmonial']);
//Cliets
Route::get('/clients', [ClientsController::class, 'clients']);
//Contact
Route::get('/contact', [ContactController::class, 'contact']);