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
         require __DIR__."/../views/Books/BookView.php";
    }

public function create() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errors = [];
        
        // التحقق من الحقول المطلوبة
        if (empty($_POST['title'])) {
            $errors[] = 'عنوان الكتاب مطلوب';
        }
        
        if (empty($_POST['author'])) {
            $errors[] = 'اسم المؤلف مطلوب';
        }
        
        if (!preg_match('/^[0-9\-]+$/', $_POST['isbn'])) {
            $errors[] = 'رقم ISBN غير صالح';
        }
        
        if (empty($errors)) {
            $this->bookModel->create(
                htmlspecialchars($_POST['title']),
                htmlspecialchars($_POST['author']),
                htmlspecialchars($_POST['isbn']),
                (int)$_POST['quantity']
            );
            header('Location: /4-%20Backend-Phase/D-4/HW/library/public/Books');
            exit;
        }
        
        // إذا كانت هناك أخطاء، أعرض النموذج مرة أخرى مع الأخطاء
        require __DIR__ . '/../views/Books/createBook.php';
        return;
    }
    
        require __DIR__ . '/../views/Books/createBook.php';
}
}

