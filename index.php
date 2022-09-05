<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Congress:Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="assets/responsive.css">
  <script src="https://kit.fontawesome.com/724b5b7deb.js" crossorigin="anonymous"></script>
</head>

<body>
 <?php
include ("partails/header.php");



?>


  <section class="caraousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/logo/1 (PNG).png" class="w-100 banner-congress" alt="banner-congress">
        </div>
        <div class="carousel-item">
          <img src="assets/logo/2 (PNG).png" class="w-100 banner-congress" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/logo/3 (PNG).png" class="w-100 banner-congress" alt="third banner of congress">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>




  </section>


  <section class="little-about mt-2">
    <div class="container">
      <h1 class="text-center name-owner">Pratap Dudhat</h1>
      <p class="owner-para">
        Pratapbhai Dudhat is 39 years old MLA contested election from Savarkundla, Amreli in the year 2017 and he won.
        Nowadays, he is associated with the Indian National Congress political party. He does not have any criminal
        records But he has 3,92,45,404 financial liability.Total assets of Pratap Dudhat are ₹9.74 crore. His profession
        is Broker, Construction Business.
        There are no criminal cases against him as declared by himself in affidavit.
      </p>

      <a href="#" target="_blank" rel="noopener noreferrer"><button class="btn readmore">Read More</button></a>
    </div>
  </section>

  <?php

include ("partails/ourjourney.php");


?>



<?php

include ("partails/mediagallery.php");
?>
 

 <?php

include "partails/footer.php";
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"></script>
</body>

</html>