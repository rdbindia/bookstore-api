<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BooksBorrowed;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function show($id)
    {
        return Book::find($id);
    }
}
