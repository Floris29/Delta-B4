<header>
<h1>Attractie Manager</h1>
<nav>
    <a href="attracties.php">Attracties</a>

    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="logout.php" class="nav-item">Logout</a>
        <a href="adminpanel.php">AdminPanel</a>
        <?php else: ?>
        <a href="login.php" class="nav-item">Login</a>
        <a href="register.php" class="nav-item">Regristreren</a>
        <?php endif; ?>
</header>