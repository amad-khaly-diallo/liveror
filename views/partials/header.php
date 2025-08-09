<header>
    <div class="top-bar">
        <div class="div-logo">
            <span class="logo">📚 </span>
            <span class="logo-text">Livre d'Or</span>
        </div>
        <ul class="nav-links">
            <li><a class="active" href="index.php?action=home">Home</a></li>
            <?php if(isset($_SESSION['user_id'])) : ?>
                <li><a href="index.php?action=comments">comments</a></li>
                <li><a href="index.php?action=write">write</a></li>
                <li><a class="profile" href="index.php?action=profile">profile</a></li>
            <?php else : ?>
                <li><a href="index.php?action=login">Login</a></li>
                <li><a href="index.php?action=register">Sign Up</a></li>
            <?php endif ?>
        </ul>
    </div>
</header>