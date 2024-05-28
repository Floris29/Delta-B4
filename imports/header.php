<header>
<h1>Attractie Manager</h1>
<nav>
    <a href="index.php" class="nav-item">Home</a>
    <a href="attracties.php">Attracties</a>

    <?php if (isset($_SESSION['user_id'])): ?>
                <a href="logout.php" class="nav-item">Logout</a>
                <a href="adminpanel.php">Admin paneel</a>
            <?php else: ?>
                <a href="login.php" class="nav-item">Login</a>
                <a href="register.php" class="nav-item">Registeren</a>
            <?php endif; ?>
</header>