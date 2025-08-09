<?php
require_once './Models/Users.php';

class UserController {

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['pseudo'] ?? null;
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];

            if( empty($username) || empty($email) || empty($_POST['password']) || $_POST['password'] !== $_POST['confirm']) {
                $error = "Veuillez remplir tous les champs correctement.";
                return;
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error = "Adresse email invalide.";
                return;
            }
            if($password !== $confirm) {
                $error = "Les mots de passe ne correspondent pas.";
                return;
            }

            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if (User::create($username, $email, $password)) {
                header("Location: index.php?action=login");
                exit;
            } else {
                $error = "Erreur lors de l'inscription.";
            }
        }
        require 'views/register.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (empty(trim($_POST['email'])) || empty(trim($_POST['password']))) {
                $error = "Veuillez remplir tous les champs.";
                return;
            }

            $email = $_POST['email'] ?? null;
            $password = $_POST['password'];

            $user = User::findByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                header("Location: index.php?action=comments");
                exit;
            } else {
                $error = "Email ou mot de passe incorrect.";
            }
        }
        require 'views/login.php';
    }

    public function profile() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?action=login");
            exit;
        }

        $user = User::findById($_SESSION['user_id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['pseudo'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $newPawd = $_POST['new-password'];

            if(!password_verify($password, $user['password'])) {
                $error = "mot de passe incorrect";
            }else {
                $password = empty($newPawd) ? password_hash($password, PASSWORD_DEFAULT) : password_hash($newPawd, PASSWORD_DEFAULT);
                
                if (User::updateProfile($user['id'], $username, $email, $password)) { 
                    header("Location: index.php?action=profile");
                    exit;
                } else {
                    $error = "Erreur lors de la mise à jour.";
                }
            }

            
        }

        require 'views/profile.php';
    }
}