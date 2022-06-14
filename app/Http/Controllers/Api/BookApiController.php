<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookApiController extends Controller
{
    //get api
    public function index()
    {
        $book = Book::all();

        if (!$book) {
            return response()->json([
                'status' => true,
                'data' => $book
            ]);
        } else {
            return response()->json([
                'status' => true,
                'data' => 'tidak ditemukan'
            ]);
        }
    }
}
