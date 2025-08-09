<?php
require_once 'config/database.php';

class User {
    public static function create($username, $email, $password) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO utilisateurs (pseudo, login, password) VALUES (?, ?, ?)");
        return $stmt->execute([$username, $email, $password]);
    }

    public static function findByEmail($email) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM utilisateurs WHERE login = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function findById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM utilisateurs WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function updateProfile($id, $username, $email, $password) {
        $db = Database::connect();
        $stmt = $db->prepare("UPDATE utilisateurs SET pseudo = ?, login = ?, password = ? WHERE id = ?");
        return $stmt->execute([$username, $email, $password, $id]);
    }
}