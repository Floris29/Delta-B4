<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* Attraction styling */
.Attractie {
  border: 1px solid #ccc;
  margin: 10px;
  padding: 10px;
  cursor: pointer;
}

.Attractie img {
  width: 100px;
  height: auto;
}
</style>
</head>
<body>

<h2>Attractions</h2>

<?php
require 'imports/head.php';
?>

<body>

<?php
require 'imports/header.php';
 ?>

<body>
    

    <div class="GridImagesAttracties">
    <div class="Attractie" data-title="baron" data-image="assets/img/baron.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="15 minutes">
            <img src="assets/img/baron.png" alt="baron">
            <p><strong>Baron</strong></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam.</p>
        </div>
        <div class="Attractie" data-title="bronzy" data-image="assets/img/bronzy.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="15 minutes">
            <img src="assets/img/bronzy.png" alt="bronzy">
            <p><strong>bronzy</strong></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam.</p>
        </div>
        <div class="Attractie" data-title="draaier" data-image="assets/img/draaier.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="15 minutes">
            <img src="assets/img/draaier.png" alt="draaier">
            <p><strong>draaier</strong></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam.</p>
        </div>
            <div class="Attractie" data-title="Duocoaster" data-image="assets/img/duocoaster.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="15 minutes">
            <img src="assets/img/duocoaster.png" alt="duocoaster">
            <p><strong>Duocoaster</strong></p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptas doloribus consectetur architecto, possimus odio. Quos voluptate corporis, blanditiis dolores minus repellat fugit? Magni nulla totam a iste in recusandae!</p>
        </div>
        <div class="Attractie" data-title="Joris" data-image="assets/img/Joris.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="20 minutes">
            <img src="assets/img/Joris.png" alt="Joris">
            <p><strong>Joris</strong></p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis vero quia, blanditiis libero dignissimos cumque nam porro modi sunt tempora architecto provident voluptatibus, pariatur, alias est veritatis optio eaque nihil!</p>
        </div>
        <div class="Attractie" data-title="Master of Speed" data-image="assets/img/masterofSpeed.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Inactive" data-wait-time="Closed">
            <img src="assets/img/masterofSpeed.png" alt="Master of Speed">
            <p><strong>Master of Speed</strong></p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis vero quia, blanditiis libero dignissimos cumque nam porro modi sunt tempora architecto provident voluptatibus, pariatur, alias est veritatis optio eaque nihil!</p>

        </div>
        <div class="Attractie" data-title="No Gravity" data-image="assets/img/nogravity.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="10 minutes">
            <img src="assets/img/nogravity.png" alt="No Gravity">
            <p><strong>No Gravity</strong></p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis vero quia, blanditiis libero dignissimos cumque nam porro modi sunt tempora architecto provident voluptatibus, pariatur, alias est veritatis optio eaque nihil!</p>

        </div>
        <div class="Attractie" data-title="Phoenix" data-image="assets/img/phoenix.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="5 minutes">
            <img src="assets/img/phoenix.png" alt="Phoenix">
            <p><strong>Phoenix</strong></p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis vero quia, blanditiis libero dignissimos cumque nam porro modi sunt tempora architecto provident voluptatibus, pariatur, alias est veritatis optio eaque nihil!</p>

        </div>
        <div class="Attractie" data-title="Piranja" data-image="assets/img/piranja.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Inactive" data-wait-time="Closed">
            <img src="assets/img/piranja.png" alt="Piranja">
            <p><strong>Piranja</strong></p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis vero quia, blanditiis libero dignissimos cumque nam porro modi sunt tempora architecto provident voluptatibus, pariatur, alias est veritatis optio eaque nihil!</p>

        </div>
        <div class="Attractie" data-title="Python" data-image="assets/img/python.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="15 minutes">
            <img src="assets/img/python.png" alt="Python">
            <p><strong>Python</strong></p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis vero quia, blanditiis libero dignissimos cumque nam porro modi sunt tempora architecto provident voluptatibus, pariatur, alias est veritatis optio eaque nihil!</p>

        </div>
        <div class="Attractie" data-title="Reuzenrad" data-image="assets/img/reuzenrad.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data-status="Active" data-wait-time="20 minutes">
            <img src="assets/img/reuzenrad.png" alt="Reuzenrad">
            <p><strong>Reuzenrad</strong></p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis vero quia, blanditiis libero dignissimos cumque nam porro modi sunt tempora architecto provident voluptatibus, pariatur, alias est veritatis optio eaque nihil!</p>

        </div>
        <div class="Attractie" data-title="Spinner" data-image="assets/img/spinner.png" data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque, sed quis, veritatis corporis culpa error reprehenderit repellendus illo similique velit nisi, sunt atque commodi veniam incidunt minima animi totam." data
        -status="Active" data-wait-time="10 minutes">
            <img src="assets/img/spinner.png" alt="Spinner">
            <p><strong>Spinner</strong></p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis vero quia, blanditiis libero dignissimos cumque nam porro modi sunt tempora architecto provident voluptatibus, pariatur, alias est veritatis optio eaque nihil!</p>

        </div>
    </div>
    
<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
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
// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// Function to set modal content dynamically
function setModalContent(title, imageSrc, description, status, waitTime) {
    document.getElementById("modalTitle").innerHTML = title;
    document.getElementById("modalImage").src = imageSrc;
    document.getElementById("modalDescription").innerHTML = description;
    document.getElementById("modalStatus").innerHTML = "Status: " + status;
    document.getElementById("modalWaitTime").innerHTML = "Estimated Wait Time: " + waitTime;
}

// Add event listeners to each attraction
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

</body>
</html>

</body>

<?php
require 'imports/footer.php';
