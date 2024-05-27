<?php
require 'imports/head.php';
session_start();
?>

<body>

<?php
require 'imports/header.php';
?>

        <h2>Registreer je voor de manager omgeving</h2>
        
        <form action="backend/handlers/registerHandler.php" method="POST">
            <div class="form-group">
                <label for="username">username:</label>
                <input type="text" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <div class="form-group">
                <label for="password">Password check:</label>
                <input type="password" name="password_check">
            </div>
            <input type="submit" value="Regristreren">
        </form>


</body>

<?php
require 'imports/footer.php';