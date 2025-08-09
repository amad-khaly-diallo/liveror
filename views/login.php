<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/stylesheets/formulaire.css">
    <title>Connexion</title>

</head>

<body>
    <div class="login-container">
        <h2>Connexion</h2>
        <?php if (!empty($error)) : ?>
            <p style="color:red; text-align: center"><?= $error ?></p>
        <?php endif; ?>
        <form method="post">
            <label for="username">Email</label>
            <input type="email" id="username" name="email" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>

            <p>Pas de compte? <a href="index.php?action=register">créez-en un</a></p>

            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>

</html>