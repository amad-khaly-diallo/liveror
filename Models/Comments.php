<?php
require_once 'config/database.php';


class Comment {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("
            SELECT commentaires.*, utilisateurs.pseudo, utilisateurs.profil 
            FROM commentaires 
            JOIN utilisateurs ON commentaires.id_utilisateur = utilisateurs.id 
            ORDER BY commentaires.date DESC
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function add($user_id, $content) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO commentaires (id_utilisateur, commentaire, date) VALUES (?, ?, NOW())");
        return $stmt->execute([$user_id, $content]);
    }
}