<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/stylesheets/commentaire.css">
    <link rel="stylesheet" href="/views/stylesheets/header-footer.css">
    <title>Write</title>
</head>
<body>
<header>
    <div class="top-bar">
        <div class="div-logo">
            <span class="logo">📚 </span>
            <span class="logo-text">Livre d'Or</span>
        </div>
        <ul class="nav-links">
            <li><a href="index.php?action=home">Home</a></li>
            <li><a href="index.php?action=comments">comments</a></li>
            <li><a class="active" href="index.php?action=write">write</a></li>
            <li><a class="profile" href="index.php?action=profile">profile</a></li>
        </ul>
    </div>
</header>

    <div class="container">
        <h1>Commentaire</h1>
        <form method="post" >
            <span> <?= htmlspecialchars($user['pseudo'])?></span>

            <label for="comment">Votre commentaire</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>

            <button name="submit_comment" type="submit">Envoyer</button>
        </form>
    </div>
    <?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>