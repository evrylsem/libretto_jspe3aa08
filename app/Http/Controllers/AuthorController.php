<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;

class AuthorController extends Controller
{
    public function getBooks($id)
    {
        $author = Author::findOrFail($id);
        $books = $author->books()->get();
        return view('authorbooks', compact('author','books'));
    }
}
