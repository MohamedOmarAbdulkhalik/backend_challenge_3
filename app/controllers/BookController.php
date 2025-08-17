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
        $books = $this->bookModel->getAll();
         require __DIR__."/../views/BookView.php";
    }

        public function create() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->bookModel->create(
                $_POST['title'],
                $_POST['author'],
                $_POST['isbn'],
                $_POST['quantity']
            );
            header('Location: /4-%20Backend-Phase/D-4/HW/library/public/Books');
            exit;
        }
        require __DIR__ . '/../views/createBook.php';
    }
}