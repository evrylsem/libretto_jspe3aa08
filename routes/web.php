<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/books', [BookController::class, 'getBookAuthor']);
Route::get('/author/{id}/books', [AuthorController::class, 'getBooks']);  