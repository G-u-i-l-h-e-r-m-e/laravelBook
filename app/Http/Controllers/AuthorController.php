<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
  public function index(){
    return view('author.index', ['authors' => Author::all()]);
}

public function create(){
    return view('author.create');
}

public function store(Request $request){
    $author = Author::create($request->all());
    return redirect('/author');
}
}
