<?php

namespace App\Http\Controllers;

use App\Models\BooksBorrowed;
use App\Models\User;
use Illuminate\Http\Request;

class BookBorrowedController extends Controller
{
    public function borrowedBooksByUser(Request $request)
    {
        $user_id = $request->input('user_id');
        $user = User::find($user_id);
        if ($user == null) {
            return response()->json([
                'message' => 'User not found.'
            ], 404);
        }

        return BooksBorrowed::where('user_id', $user_id)->get();
    }
}
