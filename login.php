<?php
require 'imports/head.php';
session_start();
?>

<body>

<?php
require 'imports/header.php';
 ?>
<div class="form-container">

        <h2>Login in de manager omgeving</h2>
        
        <form action="backend/handlers/loginHandler.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <input type="submit" value="Inloggen" class="submit">
        </form>

        </div>

</body>

<?php
require 'imports/footer.php';