<?php
require 'imports/head.php';
session_start();
?>

<body>

<?php
require 'imports/header.php';
?>

<div class="form-container">

        <h2>Registreer je voor de manager omgeving</h2>
        
        <form action="backend/handlers/registerHandler.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <div class="form-group">
                <label for="password">Herhaal wachtwoord:</label>
                <input type="password" name="password_check">
            </div>
            <input type="submit" value="Regristreren" class="submit">
        </form>

        </div>
</body>

<?php
require 'imports/footer.php';