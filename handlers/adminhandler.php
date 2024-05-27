<?php

if($_GET['action'] == 'create') { 
    //Variabelen vullen
    $naam = $_POST['naam'];
    $beschrijving = $_POST['beschrijving']; 
    $status = $_POST['status'];
    $wachttijd = $_POST['wachttijd'];
    $foto = $_POST['foto'];

    echo $naam . " / " . $beschrijving . " / " . $status;

    //1. Verbinding
    require_once '../backend/config/conn.php';

    //2. Query

    $query = "INSERT INTO attracties (naam, beschrijving, status, wachttijd, foto) VALUES(:naam, :beschrijving, :status, :wachttijd, :foto)";

    //3. Prepare
    $statement = $conn->prepare($query);

        
    //4. Execute
    $statement->execute([
        ":naam" => $naam,
        ":beschrijving" => $beschrijving,
        ":status" => $status,
        ":wachttijd" => $wachttijd,
        ":foto" => $foto,
    ]);

    header("location: ../adminpanel.php?msg=Attractie Toegevoeged");
}
?>

<?php
if($_GET['action'] == 'edit') { 

        // Variabelen vullen
        $naam = $_POST['naam'];
        $beschrijving = $_POST['beschrijving']; 
        $status = $_POST['status'];
        $wachttijd = $_POST['wachttijd'];
        $foto = $_POST['foto'];

        // 1. Verbinding
        require_once '../backend/config/conn.php';

        // 2. Query voor update
        $query = "UPDATE attracties SET naam = :naam, beschrijving = :beschrijving, status = :status, wachttijd = :wachttijd, foto = :foto WHERE id = :id";

        // 3. Prepare
        $statement = $conn->prepare($query);
    
        // 4. Execute
        $statement->execute([
            ":naam" => $naam,
            ":beschrijving" => $beschrijving,
            ":status" => $status,
            ":wachttijd" => $wachttijd,
            ":foto" => $foto,
            ":id" => $_GET['id'],
        ]);
    
        header("location: ../adminpanel.php?msg=Attractie is aangepast");
    }



if($_GET['action'] == 'delete') { 

        // Variabelen vullen
        $id = $_POST['id'];

        // 1. Verbinding
        require_once '../backend/config/conn.php';

        $query = "DELETE FROM attracties WHERE  id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([
            ":id" => $_GET['id'],
        ]);
    
        header("location: ../adminhandler.php?msg=Attractie is Verwijderd");
    }    
?>
