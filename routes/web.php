<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;


Route::get('/book',[BookController::class,'index'])->name('book.index');
Route::get('/book/create',[BookController::class,'create']); //->('book.create')
Route::post('/book',[BookController::class,'store']);


Route::get('/author',[AuthorController::class,'index'])->name('author.index');
Route::get('/author/create',[AuthorController::class,'create']); 
Route::post('/author',[AuthorController::class,'store']);