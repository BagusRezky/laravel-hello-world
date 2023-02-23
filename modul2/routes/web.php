<?php
use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return 'Hello';
// });

// // Praktikum1
// Route::get('/selamat datang', function () {
//     return "Selamat Datang";
// });

// Route::get('/about', function () {
//     return "Nim : 2141720210 & Name : Bagus Rezky A";
// });

// // Route Param
// Route::get('/article/{id}', function ($id) {
//     return " Halaman article dengan id ".$id;
// });

// Praktikum2
Route::get('/',[PageController::class,'index']);

Route::get('/about',[PageController::class,'about']);

Route::get('/articles/{id}',[PageController::class,'articles']);
