<?php 
require_once 'backend/config/config.php'; 
session_start();
?>
<!doctype html>
<html lang="nl">

<head>
    <title>Create Attractie</title>
    <?php require_once 'imports/head.php'; ?>
</head>

<body>

    <?php require_once 'imports/header.php'; ?>

    <div class="form-container">
        <h1>Nieuwe Attractie</h1>

        <form action="handlers/adminhandler.php?action=create" method="POST">
            <div class="form-group">
                <label for="naam">Naam:</label>
                <input type="text" name="naam" id="naam" class="form-input">
            </div>
            <div class="form-group">
                <label for="beschrijving">Beschrijving:</label>
                <textarea name="beschrijving" id="beschrijving" class="form-input" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-input">
                    <option value="Actief">Actief</option>
                    <option value="Onderhoud">Onderhoud</option>
                    <option value="Gesloten">Gesloten</option>
                </select>
            </div>
            <div class="form-group">
                <label for="wachttijd">Wachttijd:</label>
                <input type="text" name="wachttijd" id="wachttijd" class="form-input">
            </div>
            <div class="form-group">
                <label for="foto">Foto (URL):</label>
                <input type="url" name="foto" id="foto" class="form-input">
            </div>

            <input type="submit" value="Maak Attractie" class="submit">

        </form>
    </div>

<?php
require_once 'imports/footer.php';
?>

</body>

</html>
