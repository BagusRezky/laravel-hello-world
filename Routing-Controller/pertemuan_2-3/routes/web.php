<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
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
Route::get('/', function(){
    return view ('home');
});

Route::prefix('/category') -> group(function($index){
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/{index}', [CategoryController::class, 'show']);
});

Route::prefix('/news') -> group(function($index){
    Route::get('/', [NewsController::class, 'index']);
    Route::get('/{index}', [NewsController::class, 'show']);
});

Route::prefix('/program') -> group(function($index){
    Route::get('/', [ProgramController::class, 'index']);
    Route::get('/{index}', [ProgramController::class, 'show']);
});

Route::get('/about us', function(){
    return view ('about');
});

Route::resource('/contact', ContactController::class)->only('index');
