<?php
namespace App\Models;

use App\Core\App;

class User {
    private $db;

    public function __construct() {
        $this->db = App::db();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM users");
        return $stmt->fetchAll();
    }

    public function create($name, $email, $phone) {
        $stmt = $this->db->prepare("INSERT INTO Users ( name, email, phone) VALUES ( :name, :email, :phone)");
        return $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
        ]);
    }

}