

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/views/stylesheets/profil.css" />
    <link rel="stylesheet" href="/views/stylesheets/header-footer.css" />
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
            <li><a href="index.php?action=write">write</a></li>
            <li><a class="active profile" href="index.php?action=profile">profile</a></li>
        </ul>
    </div>
</header>

    <main class="profil-wrapper">

        <a href="index.php" class="home-link"> Accueil</a>

        <div class="profil-card">
            <img src="<?= htmlspecialchars($user['profil']) ?>">
            <h1>Mon Profil</h1>
            <form action="profile.php" method="POST" enctype="multipart/form-data" class="photo-form">
                <input type="hidden" name="profil" value="profil">
                <input type="file" name="photo" accept="image/*" id="photo" required>
                <button type="submit" name="upload-photo">Changer la photo</button>
            </form>
            <div class="userinfo">
                <h2><?= htmlspecialchars($user['pseudo']) ?></h2>
                <p><?= htmlspecialchars($user['login']) ?></p>
            </div>
            <a class="logout" href="index.php?action=logout"> se déconnecter</a>
        </div>
        <div class="form-container">
            <h1>Mon Profil</h1>

            <?php if (isset($error)) : ?>
                <p style="color:red; text-align:center;"><?= htmlspecialchars($error) ?></p>
            <?php elseif (isset($success)) : ?>
                <p style="color:green; text-align:center;"><?= htmlspecialchars($success) ?></p>
            <?php endif; ?>

            <form method="POST" class="form-box">
                <input type="hidden" name="change-profile" value="change-profile">

                <label for="login">Email</label>
                <input type="email" name="email" id="login" value="<?= htmlspecialchars($user['login']) ?>" required />

                <label for="nom">Pseudo</label>
                <input type="text" name="pseudo" id="nom" value="<?= htmlspecialchars($user['pseudo']) ?>" required />

                <label for="old-password">Ancien mot de passe</label>
                <input type="password" name="password" id="old-password"  />

                <label for="new-password">Nouveau mot de passe</label>
                <input type="password" name="new-password" id="new-password" />

                <button type="submit">Mettre à jour</button>
            </form>

        </div>
    </main>

</body>

</html>
