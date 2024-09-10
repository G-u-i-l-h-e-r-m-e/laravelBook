<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function Index(){
        return view('book.index',['books'=>Book::all()]);
    }

    public function create(){
        return view('book.create', ['authors' => Author::all()]);
                    //nome da pasta. nome do arquivo
      }

      public function store(request $request){
        $book =  Book::create($request->all());
        //  return redirect('book.index');
          return redirect('/book');
        }

        public function show(Book $book){
          return view('book.show', ['book' => $book]);
      }
      
      public function edit(Book $book){
          return view('book.edit', ['book' => $book]);
      }
      
      public function update(Request $request, Book $book){
          $book->update($request->all());
          return redirect('/book/'.$book->id);
      }
}
