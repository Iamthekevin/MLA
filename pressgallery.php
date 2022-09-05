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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/724b5b7deb.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php
include ("partails/header.php");

?>
  <section class="single-banner">
    <section class="caraousel">

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/logo//3 (PNG).png" class="w-100 banner-congress" alt="banner-congress">
        </div>

      </div>

      </button>
      </div>




    </section>




  </section>


  <section class="gallerymedia">
    <div class="container">

      <h3 class="text-center say-hello-heading">Our News</h3>

  

    <div class="row mt-2 mychange">
      
      <div class="col-lg-3 col-md-6"> <img src="./assets/logo/three.jpg" alt="" class="img-fluid same"></div>
      <div class="col-lg-3 col-md-6"> <img src="./assets/logo/four.jpg" alt="" class="img-fluid same"></div>
      <div class="col-lg-3 col-md-6"> <img src="./assets/logo/eight.jpg" alt="" class="img-fluid same"></div>
      <div class="col-lg-3 col-md-6"> <img src="./assets/logo/seven.jpg" alt="" class="img-fluid same"></div>
      


    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6"> <img src="./assets/logo/three.jpg" alt="" class="img-fluid same"></div>
      <div class="col-lg-3 col-md-6"> <img src="./assets/logo/four.jpg" alt="" class="img-fluid same"></div>
      <div class="col-lg-3 col-md-6"> <img src="./assets/logo/eight.jpg" alt="" class="img-fluid same"></div>
      <div class="col-lg-3 col-md-6"> <img src="./assets/logo/seven.jpg" alt="" class="img-fluid same"></div>
      
    </div>

  </section>


  <?php

include ("partails/footer.php");

?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

<script>
  let mymainimg = document.getElementById("mymain");
  let sameimg = document.getElementsByClassName("same");
  mymainimg.addEventListener("click", function () {
    console.log("hello");
  });






</script>

</html>