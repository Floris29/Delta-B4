<?php
include 'imports/head.php';
session_start();
?>
<body>
    <?php require_once 'imports/header.php'; ?>
    <div class="container">
        <h1>Attractie Management</h1>
        <a href="Attractiescreate.php">Maak een attractie!</a>
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo "<h2>$msg</h2>";
        }
        ?>
        <?php
        require_once 'backend/config/conn.php';
        $query = "SELECT * FROM attracties";
        $statement = $conn->prepare($query);
        $statement->execute();
        $Achtbaan = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <table>
            <tr>
                <th>Naam</th>
                <th>Beschrijving</th>
                <th>Status</th>
                <th>Wachttijd</th>
                <th>Foto</th>
                <th>Aanpassen</th>
            </tr>
            <?php foreach($Achtbaan as $Achtbaan): ?>
                <tr>
                    <td><?php echo $Achtbaan['naam']; ?></td>
                    <td><?php echo substr($Achtbaan['beschrijving'], 0, 125) ."..."; ?></td>
                    <td><?php echo substr($Achtbaan['status'], 0, 75); ?></td>
                    <td><?php echo $Achtbaan['wachttijd']; ?></td>
                    <td>
                        <span class="photo-toggle">
                            <a href="#" onclick="togglePhoto(this); return false;">Show photo</a>
                            <img src="<?php echo $Achtbaan['foto']; ?>" alt="Attractie Foto">
                        </span>
                    </td>
                    <td>
                        <a href="AttractiesEdit.php?id=<?php echo $Achtbaan['id']; ?>">Aanpassen</a>
                    </td>
            <?php endforeach; ?>
        </table>
    </div>

    <script>
        function togglePhoto(link) {
            var img = link.nextElementSibling;
            if (img.style.display === 'none') {
                img.style.display = 'block';
                link.textContent = 'Hide photo';
            } else {
                img.style.display = 'none';
                link.textContent = 'Show photo';
            }
        }
    </script>
<?php
include 'imports/footer.php';
?>

</body>
</html>