<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function Index(){
        return view('book.index',['books'=>Book::all()]);
    }

    public function create(){
        return view('book.create');
                    //nome da pasta. nome do arquivo
      }

      public function store(request $request){
        $book =  Book::create($request->all());
        //  return redirect('book.index');
          return redirect('/book');
        }
}
