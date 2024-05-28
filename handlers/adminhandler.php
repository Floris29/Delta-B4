<?php

if($_GET['action'] == 'create') { 
    $naam = $_POST['naam'];
    $beschrijving = $_POST['beschrijving']; 
    $status = $_POST['status'];
    $wachttijd = $_POST['wachttijd'];
    $foto = $_POST['foto'];

    echo $naam . " / " . $beschrijving . " / " . $status;
    require_once '../backend/config/conn.php';


    $query = "INSERT INTO attracties (naam, beschrijving, status, wachttijd, foto) VALUES(:naam, :beschrijving, :status, :wachttijd, :foto)";

    $statement = $conn->prepare($query);

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


        $naam = $_POST['naam'];
        $beschrijving = $_POST['beschrijving']; 
        $status = $_POST['status'];
        $wachttijd = $_POST['wachttijd'];
        $foto = $_POST['foto'];


        require_once '../backend/config/conn.php';


        $query = "UPDATE attracties SET naam = :naam, beschrijving = :beschrijving, status = :status, wachttijd = :wachttijd, foto = :foto WHERE id = :id";


        $statement = $conn->prepare($query);

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


        $id = $_POST['id'];

        require_once '../backend/config/conn.php';

        $query = "DELETE FROM attracties WHERE  id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([
            ":id" => $_GET['id'],
        ]);
    
        header("location: ../adminpanel.php?msg=Attractie is Verwijderd");
    }    
?>
