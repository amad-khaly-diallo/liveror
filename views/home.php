<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/stylesheets/home.css">
    <link rel="stylesheet" href="/views/stylesheets/header-footer.css">
    <title>Livre d'Or</title>

</head>

<body>
    
<?php require_once __DIR__ . '/partials/header.php' ?>

    <main>
        <section class="hero-section">
            <span class="hero-text light">Bienvenue sur le Livre d'Or</span>
        </section>
        <section class="home">
            <div class="container">
                <h1>📖 Bienvenue sur le Livre d’Or</h1>

                <p>
                    Ici, chaque mot a son importance. Ce livre d’or est un espace de liberté, de souvenir, de gratitude et de partage.
                </p>

                <p>
                    Que vous soyez un visiteur curieux, un membre actif, ou juste de passage… laissez une trace de votre passage.
                </p>

                <hr>

                <h2>💡 Pourquoi laisser un message ?</h2>
                <ul>
                    <li>🗣️ Pour dire merci</li>
                    <li>📌 Pour partager une expérience</li>
                    <li>🧡 Pour encourager la communauté</li>
                    <li>✒️ Pour laisser un souvenir</li>
                </ul>

                <hr>

                <h2>🔐 Espace membre</h2>
                <p>
                    Pour publier un commentaire ou modifier votre profil, il vous suffit de vous connecter.
                    Si vous n’avez pas encore de compte, créez-en un gratuitement :
                </p>

                <div class="actions">
                    <a href="index.php?action=register" class="btn">Créer un compte</a>
                    <a href="index.php?action=login" class="btn">Se connecter</a>
                </div>

                <hr>

                <h2>📝 Derniers commentaires</h2>
                <p>
                    Consultez les derniers messages laissés par nos membres :
                </p>
                <a href="index.php?action=comments" class="btn">Voir les commentaires</a>

                <hr>

                <h2>🧭 Ce que vous pouvez faire</h2>
                <ul>
                    <li>✅ Lire les messages du livre d’or</li>
                    <li>✅ Créer un compte</li>
                    <li>✅ Modifier votre profil</li>
                    <li>✅ Publier un message</li>
                    <li>✅ Voir votre message en ligne</li>
                </ul>

                <hr>

                <blockquote>
                    <p>“Un mot gentil peut réchauffer trois mois d’hiver.” – Proverbe japonais</p>
                </blockquote>

                <p style="text-align: center; margin-top: 30px;">
                    Merci de faire vivre ce livre d’or 🙏
                </p>
            </div>
        </section>
    </main>

<?php include __DIR__ . '/partials/footer.php'; ?>

</body>

</html>