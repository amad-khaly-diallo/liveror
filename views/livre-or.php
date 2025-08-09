<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages du Livre d'Or</title>
    <link rel="stylesheet" href="/views/stylesheets/livreor.css">
    <link rel="stylesheet" href="/views/stylesheets/header-footer.css">
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
            <li><a class="active" href="index.php?action=comments">comments</a></li>
            <li><a href="index.php?action=write">write</a></li>
            <li><a class="profile" href="index.php?action=profile">profile</a></li>
        </ul>
    </div>
</header>

    <main>
        <h2>💬 Témoignages des utilisateurs</h2>
        <section class="messages">
            <?php if(count($comments) === 0) : ?>
                <p style="text-align: center; color: gray;">Aucun commentaire ...</p>
                <span style="font-size: 1.2rem; text-align: center"> Soyez le premier à commenter 😊</span>
            <?php else : ?>
                <?php foreach ($comments as $comment) : ?>
                    <div class="message">
                        <div class="user-profile">
                            <div class="image">
                                <img src="<?=$comment['profil']?>" alt="">
                            </div>
                            <div class="comment-details">
                                <h3><?= htmlspecialchars($comment['pseudo']) ?></h3>
                                <span>Posté le : <?= htmlspecialchars($comment['date']) ?></span>
                            </div>
                        </div>
                        <p><?= htmlspecialchars($comment['commentaire']) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif ?>

        </section>
    </main>

<?php include __DIR__ . '/partials/footer.php' ?>

</body>

</html>