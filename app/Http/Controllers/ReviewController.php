<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Book;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;

class ReviewController extends Controller
{
    public function showReviews($id)
    {
        // $books = Book::findOrFail($id);
        // $reviews = $books->reviews();
        // return view('bookreviews', compact('books', 'reviews'));
    }
}
