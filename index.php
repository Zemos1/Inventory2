<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>dailypugstick.</title>
    <link rel="icon" type="image/x-icon" href="img/dailypugsticklogo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="final.css">
  </head>
  <body>
   
    <nav class="navbar navbar-custom fixed-top"> 
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color:black;"><img class="logo" src="img/dailypugsticklogo.png" style="width: 70px; flo">dailypugstick.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header bg-dark bg-gradient ">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><b style="color:white">dailystickpug.</b></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#top-cards">Popular Stickers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#product">Shop Stickers</a>
              </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

  <!-- carousel slideshow section -->

    <div id="carouselExampleCaptions" class="carousel slide"  data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/stickerbg1.jpg" class="d-block w-100" alt="..." >
          <div class="carousel-caption">
            <h5>Welcome to dailypugstick.!</h5>
            <p>stickers available at it's finest</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/jujutsubg.jpg" class="d-block w-100" alt="..." >
          <div class="carousel-caption">
            <h5>NEW JUJUTSU KAISEN STICKER BUNDLES</h5>
            <p>price starts at 89PHP</p>
            <a href="#jjk" class="btn btn-dark">Buy now</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/shopnow.jpg" class="d-block w-100" alt="..." >
          <div class="carousel-caption">
            <h5>SHOP NOW</h5>
            <p>Proceed your inquires below</p>
            <a href="#product" class="btn btn-dark">Buy now</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
      
    <br>

    <!-- more informations -->

      <h2 style="text-align: center; color: rgb(0, 0, 0);"> Welcome to <b>dailypugstick.</b> </h2>
      <h2 style="text-align: center; color: rgb(0, 0, 0)"> An e-commerce site for quality stickers <b>that suits your taste. </b> </h2>
      
      <br>
      <br>
      
      <section id="about" class="about section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
              <div class="about-img">
                <img src="img/about.jpg" alt="" class="img-fluid" style="height: 350px; width:500px;">
              </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
              <div class="about-text">
                <br>
                <h2 style="color:white;"> About dailypugstick. </h2>
                <p style="text-align: justify; color:white;"> Dailypugstick was born out of a passion for turning everyday objects into canvases of self-expression. We believe that stickers are not just adhesive pieces of paper; they're tiny fragments of art that can transform the ordinary into the extraordinary.</p>
                <a href="#" class="btn btn-dark">Learn More</a> 
              </div>
            </div>
          </div>
        </div>
      </section> 

      <br>
      <br>

<!-- POPULAR STICKER -->

<section id="top-cards">
  <div class="heading2">Popular <span>Stickers</span></div>
  <div class="container">
    <div class="row">

    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="img/jjksticker1.jpg" alt="">
      </div>
    </div>

    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="img/opsticker1.jpg" alt="">
      </div>
    </div>

    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="img/supremesticker1.jpg" alt="">
      </div>
    </div>  

  </div>
</div>
</section>

<br>
<br>

<section id="product">
<div class="heading2">Sti<span>ckers</span></div>
</section>

<!-- sticker products start -->



<section id="jjk">
<div class="container">
  <div class="heading3">Jujutsu Kaisen</div>
</div>

<div class="container" id="container2">

<div class="row">

<div class="col-md-3 py-3 py-md-0">
  <div class="card">
    <img src="img/jujutsu/jujutsu1.jpg" alt="">
    
    <div class="card-body">
      

      <h3>Gojo Jolly</h3>
      <p>PHP25 </p>
      <a href="gojo-jolly.php" class="btn btn-dark">Buy Now</a>
    </div>
  </div>
</div>

<div class="col-md-3 py-3 py-md-0">
  <div class="card">
    <img src="img/jujutsu/jujutsu2.jpg" alt="">
    
    <div class="card-body">
      

      <h3>Gojo Six Eyes</h3>
      <p>PHP25 </p>
      <a href="gojo-six-eyes.php" class="btn btn-dark">Buy Now</a>
    </div>
  </div>
</div>

<div class="col-md-3 py-3 py-md-0">
  <div class="card">
    <img src="img/jujutsu/jujutsu3.jpg" alt="">
    
    <div class="card-body">
    

      <h3>Gojo Smirk</h3>
      <p>PHP25 </p>
      <a href="gojo-smirk.php" class="btn btn-dark">Buy Now</a>
    </div>
  </div>
</div>

<div class="col-md-3 py-3 py-md-0">
  <div class="card">
    <img src="img/jujutsu/jujutsu4.jpg" alt="">
    
    <div class="card-body">
      

      <h3>Gojo Exclamation</h3>
      <p>PHP25 </p>
      <a href="gojo-exclamation.php" class="btn btn-dark">Buy Now</a>
    </div>
  </div>
</div>

</div> 


<div class="row" style="margin-top:30px;">

<div class="col-md-3 py-3 py-md-0">
  <div class="card">
    <img src="img/jujutsu/yuji bundle.jpg" alt="">
    
    <div class="card-body">
     

      <h3>Yuji Bundle</h3>
      <p>PHP79</p>
      <a href="yuji-bundle.php" class="btn btn-dark">Buy Now</a>
    </div>
  </div>
</div>

<div class="col-md-3 py-3 py-md-0">
  <div class="card">
    <img src="img/jujutsu/nobara bundle.jpg" alt="">
    
    <div class="card-body">
      

      <h3>Nobara Bundle</h3>
      <p>PHP79 </p>
      <a href="nobara-bundle.php" class="btn btn-dark">Buy Now</a>
    </div>
  </div>
</div>

<div class="col-md-3 py-3 py-md-0">
  <div class="card">
    <img src="img/jujutsu/megumi bundle.jpg" alt="">
    
    <div class="card-body">
      

      <h3>Megumi Bundle</h3>
      <p>PHP79 </p>
      <a href="megumi-bundle.php" class="btn btn-dark">Buy Now</a>
    </div>
  </div>
</div>

<div class="col-md-3 py-3 py-md-0">
  <div class="card">
    <img src="img/jujutsu/jjk bundle.jpg" alt="">
    
    <div class="card-body">

      <h3>JJK Chibi Bundle</h3>
      <p>PHP89 </p>
      <a href="jjk-chibi-bundle.php" class="btn btn-dark">Buy Now</a>
    </div>
  </div>
</div>

</div>

</div>
</section>

<!-- sticker products end -->


<br>
<br>



<!-- footer -->


<div class="background-color">
  <div class="b-example-divider"></div>

  <div class="container">
      <footer class="row row-cols-1 row-cols-md-2 py-5 my-5 border-top"> <!-- Use 'row-cols-md-2' to create two columns on medium-sized screens and larger -->
          <div class="col-md-6 mb-3">
              <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
              </a>
              <div class="d-flex flex-column">
                  <img class="logo" src="img/dailypugsticklogo.png" style="width: 200px; flo">
                  <h1 class="footer">dailypugstick</h1>
                  <p>dailypugstick. stickers with passion.</p>
                  <p> <i class="bi bi-c-circle"></i>Copyright 2023 </p>
              
              </div>
          </div>
      </footer>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>
