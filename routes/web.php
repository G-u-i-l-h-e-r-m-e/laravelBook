<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;


Route::get('/book',[BookController::class,'index']);//->name('book.index');
Route::get('/book/create',[BookController::class,'create']); //->('book.create')
Route::post('/book',[BookController::class,'store']);
Route::get('/book/{book}',[BookController::class,'show']);
Route::get('/book/{book}/edit',[BookController::class,'edit']);
Route::put('/book/{book}',[BookController::class,'update']);


Route::get('/author',[AuthorController::class,'index'])->name('author.index');
Route::get('/author/create',[AuthorController::class,'create']); 
Route::post('/author',[AuthorController::class,'store']);
Route::get('/author/{author}',[AuthorController::class,'show']);
Route::get('/author/{author}/edit',[AuthorController::class,'edit']);
Route::put('/author/{author}',[AuthorController::class,'update']);