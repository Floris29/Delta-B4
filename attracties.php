<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/modal.css">
</head>
<body>

<?php
require 'imports/head.php';
session_start();
?>

<body>
<?php
require 'imports/header.php';
?>
    
    <h2 class="titel-h2">Attracties</h2>
    <p class="p-subtitel">Click op de attracties voor meer info!</p>
    <div class="GridImagesAttracties">
    <?php
        require_once 'backend/config/conn.php';
        $query = "SELECT * FROM attracties";
        $statement = $conn->prepare($query);
        $statement->execute();
        $attracties = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($attracties as $attraction) {
        $naam = $attraction['naam'];
        $foto = $attraction['foto'];
        $beschrijving = $attraction['beschrijving'];
        $status = $attraction['status'];
        $wachttijd = $attraction['wachttijd'];
        echo '<div class="Attractie" data-title="' . $naam . '" data-image="' . $foto . '" data-description="' . $beschrijving . '" data-status="' . $status . '" data-wait-time="' . $wachttijd . '">';
        echo '<img src="' . $foto . '" alt="' . $naam . '">';
        echo '<h2><strong>' . $naam . '</strong></h2>';
        echo '</div>';
    }
    ?>
    </div>
    
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 id="modalTitle">Title</h3>
    <img id="modalImage" src="" alt="Image">
    <p id="modalDescription"></p>
    <p id="modalStatus"></p>
    <p id="modalWaitTime"></p>
  </div>
</div>

<script>
var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}

function setModalContent(title, imageSrc, description, status, waitTime) {
    document.getElementById("modalTitle").innerHTML = title;
    document.getElementById("modalImage").src = imageSrc;
    document.getElementById("modalDescription").innerHTML = description;
    document.getElementById("modalStatus").innerHTML = "Status: " + status;
    document.getElementById("modalWaitTime").innerHTML = "Estimated Wait Time: " + waitTime;
}

var attractions = document.querySelectorAll('.Attractie');
attractions.forEach(function(attraction) {
    attraction.addEventListener('click', function() {
        var title = attraction.dataset.title;
        var imageSrc = attraction.dataset.image;
        var description = attraction.dataset.description;
        var status = attraction.dataset.status;
        var waitTime = attraction.dataset.waitTime;
        setModalContent(title, imageSrc, description, status, waitTime);
        modal.style.display = "block";
    });
});
</script>

<?php
require 'imports/footer.php';
?>

</body>
</html>
