<?php
        $id = $_GET['id'];
        require_once 'backend/config/conn.php';
        $query = "SELECT * FROM attracties WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $attraction = $statement->fetch(PDO::FETCH_ASSOC);

        session_start();
        include 'imports/head.php';
?>



<body>

    <?php require_once 'imports/header.php'; ?>

    <div class="form-container">
        <h1>Bewerk Attractie</h1>

        <form action="handlers/adminhandler.php?action=edit&id=<?php echo $id; ?>" method="POST" class="edit-form">
            <div class="form-group">
                <label for="naam">Naam:</label>
                <input type="text" name="naam" id="naam" class="form-input" value="<?php echo $attraction['naam']; ?>">
            </div>
            <div class="form-group">
                <label for="beschrijving">Beschrijving:</label>
                <textarea name="beschrijving" id="beschrijving"  rows="4"><?php echo $attraction['beschrijving']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-input">
                    <option value="Actief" <?php if ($attraction['status'] == 'Actief') echo 'selected'; ?>>Actief</option>
                    <option value="Onderhoud" <?php if ($attraction['status'] == 'Onderhoud') echo 'selected'; ?>>Onderhoud</option>
                    <option value="Gesloten" <?php if ($attraction['status'] == 'Gesloten') echo 'selected'; ?>>Gesloten</option>
                </select>
            </div>
            <div class="form-group">
                <label for="wachttijd">Wachttijd:</label>
                <input type="text" name="wachttijd" id="wachttijd" class="form-input" value="<?php echo $attraction['wachttijd']; ?>">
            </div>
            <div class="form-group">
                <label for="foto">Foto (URL):</label>
                <input type="url" name="foto" id="foto" class="form-input" value="<?php echo $attraction['foto']; ?>">
            </div>

            <input type="submit" value="Bewerk attractie" class="submit">
        </form>


            <form action="handlers/adminhandler.php?action=delete&id=<?php echo $_GET['id'];?>" method="POST" onsubmit="return confirm('Weet je zeker dat je dit wilt verwijderen? Verwijderd is verwijderd.');">
            <input type="submit" value="Attractie verwijderen" class="submit">
            </form>
        </div>
    </div>

<?php
include 'imports/footer.php';
?>

</body>

</html>
