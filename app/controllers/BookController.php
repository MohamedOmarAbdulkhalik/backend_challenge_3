<?php
namespace App\Controllers;

use App\Models\Book;
class BookController
{
    public function index()
    {
        echo "Hello <br> You are in BookController::index()";
         require __DIR__."/../views/BookView.php";
        $book = new Book();
        print_r($book->getAll());
    }
}