<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\TagController;


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
Route::delete('/book/{book}', [BookController::class, 'delete']);


Route::get('/tag', [TagController::class,'index']);
Route::get('/tag/create', [TagController::class, 'create']);
Route::post('/tag', [TagController::class, 'store']);