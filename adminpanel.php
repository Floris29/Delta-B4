<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php require_once 'imports/header.php'; ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/index.css">
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
                    <td><?php echo $Achtbaan['beschrijving']; ?></td>
                    <td><?php echo $Achtbaan['status']; ?></td>
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

    <style>
        .photo-toggle img {
            display: none;
        }
    </style>
</body>
</html>