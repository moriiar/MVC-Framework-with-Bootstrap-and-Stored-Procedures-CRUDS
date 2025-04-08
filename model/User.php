<?php
require_once __DIR__ . '/../config/database.php';

class User {
    private $conn;

    public function __construct(){
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getUsers(){
        $stmt = $this->conn->prepare("CALL GetUsers()");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById($id){
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insertUser($lastname, $firstname){
        $stmt = $this->conn->prepare("CALL InsertUser(:lastname, :firstname)");
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":firstname", $firstname);
        return $stmt->execute();
    }

    public function updateUser($id, $lastname, $firstname){
        $stmt = $this->conn->prepare("CALL UpdateUser(:id, :lastname, :firstname)");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":firstname", $firstname);
        return $stmt->execute();
    }

    public function deleteUser($id){
        $stmt = $this->conn->prepare("CALL DeleteUser(:id)");
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
?>