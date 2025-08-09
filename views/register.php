<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/stylesheets/formulaire.css">
    <title>Inscription</title>

</head>

<body>
    
    <div class="login-container">
        <h2>Inscription</h2>

        <?php if (!empty($error)) : ?>
            <p style="color:red"><?= $error ?></p>
        <?php endif; ?>
        <form method="post" action="">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="pseudo" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm">Confirmer le mot de passe</label>
            <input type="password" id="confirm" name="confirm" required>

            <p>Déjà un compte? <a href="index.php?action=login">Connectez-vous</a></p>

            <button type="submit">S'inscrire</button>
        </form>
    </div>
</body>

</html>