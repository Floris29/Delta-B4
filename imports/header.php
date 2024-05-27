<header>
    <h1>Attractie Manager</h1>>

    <a href="attracties.php">Attracties</a>

            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="logout.php" class="nav-item">Logout</a>
            <?php else: ?>
                <a href="login.php" class="nav-item">Login</a>
                <a href="register.php">Regristreren</a>
            <?php endif; ?>
</header>