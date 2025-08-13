<?php
class Database {
    public static function connect() {
        try {
            return new PDO("mysql:host=localhost;dbname=livreor;charset=utf8mb4", "root", "", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
}