<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
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

    public function showReviews($id)
    {
        $books = Book::findOrFail($id);
        $reviews = $books->reviews();
        // $books = $reviews->books->get();
        return view('bookreviews', compact('books', 'reviews'));
    }
}
