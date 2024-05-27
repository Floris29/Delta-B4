<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/modal.css">
</head>
<body>

<h1>Attractions</h1>

<?php
require 'imports/head.php';
session_start();
?>

<body>
<?php
require 'imports/header.php';
?>
    
    <h2 class="titel-h2">Attractions</h2>
    <p class="p-subtitel">Click op de attracties voor meer info!</p>
    <div class="GridImagesAttracties">
    <div class="Attractie" data-title="baron" data-image="assets/img/baron.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="15 minutes">
            <img src="assets/img/baron.png" alt="baron">
            <h2><strong>Baron</strong></h2>
        </div>
        <div class="Attractie" data-title="bronzy" data-image="assets/img/bronzy.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="15 minutes">
            <img src="assets/img/bronzy.png" alt="bronzy">
            <p><strong>bronzy</strong></p>
        </div>
        <div class="Attractie" data-title="draaier" data-image="assets/img/draaier.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="15 minutes">
            <img src="assets/img/draaier.png" alt="draaier">
            <p><strong>draaier</strong></p>
        </div>
            <div class="Attractie" data-title="Duocoaster" data-image="assets/img/duocoaster.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="15 minutes">
            <img src="assets/img/duocoaster.png" alt="duocoaster">
            <p><strong>Duocoaster</strong></p>
        </div>
        <div class="Attractie" data-title="Joris" data-image="assets/img/Joris.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="20 minutes">
            <img src="assets/img/Joris.png" alt="Joris">
            <p><strong>Joris</strong></p>
                  </div>
        <div class="Attractie" data-title="Master of Speed" data-image="assets/img/masterofSpeed.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Inactive" data-wait-time="Closed">
            <img src="assets/img/masterofSpeed.png" alt="Master of Speed">
            <p><strong>Master of Speed</strong></p>
                   </div>
        <div class="Attractie" data-title="No Gravity" data-image="assets/img/nogravity.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="10 minutes">
            <img src="assets/img/nogravity.png" alt="No Gravity">
            <p><strong>No Gravity</strong></p>
                   </div>
        <div class="Attractie" data-title="Phoenix" data-image="assets/img/phoenix.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="5 minutes">
            <img src="assets/img/phoenix.png" alt="Phoenix">
            <p><strong>Phoenix</strong></p>
                   </div>
        <div class="Attractie" data-title="Piranja" data-image="assets/img/piranja.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Inactive" data-wait-time="Closed">
            <img src="assets/img/piranja.png" alt="Piranja">
            <p><strong>Piranja</strong></p>
                   </div>
        <div class="Attractie" data-title="Python" data-image="assets/img/python.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="15 minutes">
            <img src="assets/img/python.png" alt="Python">
            <p><strong>Python</strong></p>
                   </div>
        <div class="Attractie" data-title="Reuzenrad" data-image="assets/img/reuzenrad.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="20 minutes">
            <img src="assets/img/reuzenrad.png" alt="Reuzenrad">
            <p><strong>Reuzenrad</strong></p>
                   </div>
        <div class="Attractie" data-title="Spinner" data-image="assets/img/spinner.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data
        -status="Active" data-wait-time="10 minutes">
            <img src="assets/img/spinner.png" alt="Spinner">
            <p><strong>Spinner</strong></p>
                   </div>
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
