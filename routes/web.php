<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/books', [BookController::class, 'getBookAuthor']);
Route::get('/author/{id}/books', [AuthorController::class, 'getBooks']);  
Route::get('/book/{id}/ratings', [BookController::class, 'showReviews']);