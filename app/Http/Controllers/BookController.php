<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function index(){
        return view('book.index', ['books'=>Book::all()]);
    }
    
    public function create(){
        return view('book.create', ['authors'=>Author::all()]);
    }

    public function store(Request $request){
        $book = Book::create($request->all());
        $book->Tags()->attach($request['tags']);        
        return redirect('/book');
    }

    public function show(Book $book){
       return view('book.show', ['book'=>$book]); 
    }

    public function edit(Book $book){
        return view('book.edit', ['book'=>$book]);
    }

    public function update(Book $book, Request $request){
        $book->update($request->all());
        return redirect('/book');
    }

    public function delete(Book $book){
        $book->delete();
        return redirect('/book');
    }
}
