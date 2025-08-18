<?php
namespace App\Controllers;

use App\Models\User;

class UserController
{
    private $bookModel;

    public function __construct() {
        $this->bookModel = new User();
    }
    public function index()
    {
        $users = $this->bookModel->getAll();
echo "User page";
         require __DIR__."/../views/Users/users.php";
    }

public function create() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errors = [];
        
        // التحقق من الحقول المطلوبة
        if (empty($_POST['name'])) {
            $errors[] = 'عنوان الكتاب مطلوب';
        }
        
        if (empty($_POST['email'])) {
            $errors[] = 'اسم المؤلف مطلوب';
        }
        
        if (empty($_POST['phone'])) {
            $errors[] = 'رقم ISBN غير صالح';
        }
        
        if (empty($errors)) {
            $this->bookModel->create(
                htmlspecialchars($_POST['name']),
                htmlspecialchars($_POST['email']),
                htmlspecialchars($_POST['phone']),
            );
            header('Location: /4-%20Backend-Phase/D-4/HW/library/public/users');
            exit;
        }
        
        // إذا كانت هناك أخطاء، أعرض النموذج مرة أخرى مع الأخطاء
        require __DIR__ . '/../views/Users/create.php';
        return;
    }
    
        require __DIR__ . '/../views/Users/create.php';
}
}

