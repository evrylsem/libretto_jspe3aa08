<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getBookAuthor()
    {
        $books= Book::with('author')->get();
        return view('books', compact('books'));
    }
}
