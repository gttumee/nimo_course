<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\PostCondition;

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

// Post хийх талбар хийнэ 
Route::post('/research',[PostController::class,'research'])->name('research');
Route::get('/research',[PostController::class,'research'])->name('research');
Route::post('/course',[PostController::class,'course'])->name('course');
Route::get('/course',[PostController::class,'course'])->name('course');
Route::post('/contact',[PostController::class,'contact'])->name('contact');
Route::get('/contact',[PostController::class,'contact'])->name('contact');


Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/register', [PagesController::class, 'courseRequest'])->name('register');
Route::get('/news', [PagesController::class, 'news'])->name('news');
Route::get('/newsdetail', [PagesController::class, 'newsdetail'])->name('newsdetail');



Route::get('/', function () {
    return view('pages.index');
});