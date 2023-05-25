<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksBorrowed extends Model
{
    use HasFactory;

    protected $table = 'books_borrowed';
    protected $primaryKey = 'borrow_id';

    protected $fillable = [
        'book_id',
        'user_id',
        'borrowed_on',
        'returned_on'
    ];
}
