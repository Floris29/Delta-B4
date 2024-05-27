<header>
    <h1>Attractie Manager</h1>>

    <a href="attracties.php">Attracties</a>

    <?php
    if (isset($_SESSION['user_id'])) {
        $ingelogd = true;
    } else {
        $ingelogd = false;
    }
    if ($ingelogd): ?>
                <p><a href="logout.php">Uitloggen</a></p>
        <?php else: ?>
                <p><a href="login.php">Inloggen</a></p>
                <p><a href="register.php">Regristreren</a></p>
        <?php endif; ?>
</header>