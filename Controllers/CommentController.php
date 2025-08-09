<?php
require_once './Models/Comments.php';
require_once './Models/Users.php';

class CommentController {
    public function index() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?action=login");
            exit;
        }

        $comments = Comment::getAll();
        require './views/livre-or.php';
    }

    public function add() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?action=login");
            exit;
        }

        $user = User::findById($_SESSION['user_id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $content = $_POST['comment'];
            Comment::add($_SESSION['user_id'], $content);
            header("Location: index.php?action=comments");
            exit;
        }

        require './views/commentaire.php';
    }
}