<?php
namespace App\Controllers;

use App\Models\Book;
class BookController
{
    private $bookModel;

    public function __construct() {
        $this->bookModel = new Book();
    }
    public function index()
    {
        echo "Hello <br> You are in BookController::index()"; 
        $books = $this->bookModel->getAll();
         require __DIR__."/../views/BookView.php";
       
        //print_r($books->getAll());
    }
}