<?php

session_start();

require_once __DIR__ . '/config/database.php';

$action = $_GET['action'] ?? 'home';

switch ($action) {
    case 'register':
        require __DIR__ . '/Controllers/UserController.php';
        $controller = new UserController();
        $controller->register();
        break;

    case 'login':
        require __DIR__ . '/Controllers/UserController.php';
        $controller = new UserController();
        $controller->login();
        break;

    case 'logout':
        session_destroy();
        header('Location: index.php?action=login');
        break;

    case 'profile':
        require __DIR__ . '/Controllers/UserController.php';
        $controller = new UserController();
        $controller->profile();
        break;

    case 'write':
        require __DIR__ . '/Controllers/CommentController.php';
        $controller = new CommentController();
        $controller->add();
        break;

    case 'comments':
        require __DIR__ . '/Controllers/CommentController.php';
        $controller = new CommentController();
        $controller->index();
        break;

    default:
        require __DIR__ . '/views/home.php';
        break;
}
