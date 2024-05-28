<?php
require 'imports/head.php';
session_start();
?>

<body>

<?php
require 'imports/header.php';
 ?>
<section class="form-container">

        <h2>Login in de manager omgeving</h2>
        <div class="error">
        <?php
            if (isset($_GET['error'])) {
                $error_message = $_GET['error'];
                echo "<div class='error-message'>$error_message</div>";
                unset($_SESSION['error']);
            }
            ?>
</div>
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
        </section>

</body>

<?php
require 'imports/footer.php';