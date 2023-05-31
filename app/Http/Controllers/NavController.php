<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NavController extends Controller
{
    public function redAdd(){
        return view('addBook');
    }

    public function add(Request $request){
        $valid = $request->validate([
            'title' => 'required',
            'author' =>  'required',
            'cover' =>  'required',
            'language' =>  'required',
            'price' =>  'required',
            'genre' =>  'required',
            'publication_date' =>  'required',
            'publisher' =>  'required',
            'description' =>  'required',
        ]);

        $book = Book::create([
            'title' => $valid['title'],
            'author' => $valid['author'],
            'cover' => $valid['cover'],
            'language' => $valid['language'],
            'price' => $valid['price'],
            'genre' => $valid['genre'],
            'publication_date' => $valid['publication_date'],
            'publisher' => $valid['publisher'],
            'description' => $valid['description'],
            'stock' => 1,
        ]);
        return Redirect('index');
    }
}
