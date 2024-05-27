<?php
require 'imports/head.php';
session_start();
?>

<body>

<?php
require 'imports/header.php';
 ?>


        <h2>Login in de manager omgeving</h2>
        
        <form action="backend/handlers/loginHandler.php" method="POST">
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <input type="submit" value="Inloggen">
        </form>


</body>

<?php
require 'imports/footer.php';