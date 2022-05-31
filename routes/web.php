<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;

Route::get('/', function () {

    // Book::create([
    //     "title" => "Hello ",
    //     "author" => "Joãoo",
    //     "editor" => "Darkside"
    // ]);

    // INSERT INTO Book VALUES ("Hello World", "Joãozinho", "Tilibra");

    return view('welcome');
});

Route::post("/books", function (){
    return view("cadastro");
});
Route::get("/books", function () {
    return view("cadastro");
});