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

    /**
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return [
            "status" => 1,
            "data" => $book
        ];
    }

    public function destroy(Book $book)
    {
        $this->middleware('auth');
        $this->middleware('manager'); //or moderate or whatever

        $book->delete();
        return [
            "status" => 1,
            "data" => $book,
            "msg" => "Book deleted successfully"
        ];
    }
}
