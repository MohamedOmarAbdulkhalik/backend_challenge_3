<?php
namespace App\Models;

use App\Core\App;

class Book {
    private $db;

    public function __construct() {
        $this->db = App::db();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM books");
        return $stmt->fetchAll();
    }

    public function create($title, $author, $isbn, $quantity) {
        $stmt = $this->db->prepare("INSERT INTO books (title, author, isbn, quantity, available_quantity) VALUES (:title, :author, :isbn, :quantity, :quantity)");
        return $stmt->execute([
            ':title' => $title,
            ':author' => $author,
            ':isbn' => $isbn,
            ':quantity' => $quantity
        ]);
    }

}