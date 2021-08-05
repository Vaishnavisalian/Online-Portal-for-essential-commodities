<?php
require_once "pdo.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop&Safe</title>

  <!---Bootstrap CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">


  <!---Custom CSS-->
  <link rel="stylesheet" href="style12.css">


  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&display=swap" rel="stylesheet">



  <!--Font awesome -->
  <script src="https://kit.fontawesome.com/5888afab31.js" crossorigin="anonymous"></script>



  <!--typed.js cdn-->
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>



  <!--Animate on Scroll CSS-->
<style>

</style>

</head>

<body>

  <!---Header Section-->
<section id="header" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.9)), url(images/header3.png);">


    <!---Navigation-->

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Shop & <span>Safe</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="hello.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="categories.php">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact</a>
            </li>
           <?php
                if(isset($_SESSION['uid'])){ ?>
               <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
          <?php   }
               else{?>
                <li class="nav-item"><a class="nav-link" href="signin.php">Login</a></li>
         <?php    }
              ?>
            

          </ul>
          <form class="d-flex">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit"> <i class="fas fa-search"></i> </button>
          </form>
        </div>
      </div>
    </nav>

    <!---header Text Section-->
    <section id="headertext">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 p-2 d-flex align-items-center justify-content-center texthead">
            <div class="textContainer">
              <h2>Together <span>We Buy</span> Together <span>We Save</span> </h2>
              <p>During This Corona Pandemic Buy All The Essential Commodities Of
              Society Together
              This Will Help Our Government To Fight With The Spread Of Corona Virus
              This will help our environment By Less Transportation To Deliver Orders Seperately Of
              Every Single House.
              
              This Will Help Citizens To Stay Home Stay Safe.

              </p>

              <button class="btn"><a href="#aboutus" style="color:black;">Read More</a></button>

              <div class="line">
                <i class="fas fa-shopping-cart"></i>
                <i class="fas fa-shopping-cart"></i>
                <i class="fas fa-shopping-cart"></i>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


</section>
<section id="download">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="appDetails">
            <h3>During This Pandemic Contribute Towards Society Using<span> Shop & Safe</span></h3>


            <div class="step d-flex flex-wrap align-items-center">
              <div class="numContainer">
                <h2>01</h2>

              </div>
              <h4> <span id="selectc"></span> </h4>

            </div>
            <div class="step d-flex flex-wrap align-items-center">
              <div class="numContainer">
                <h2>02</h2>

              </div>
              <h4> <span id="selectp"></span></h4>
            </div>
            <div class="step d-flex flex-wrap align-items-center">
              <div class="numContainer">
                <h2>03</h2>

              </div>
              <h4> <span id="add"></span></h4>
          </div>
            <div class="step d-flex flex-wrap align-items-center">
              <div class="numContainer">
                <h2>04</h2>

              </div>
              <h4><span id="order"></span></h4>
            </div>
          </div>

        </div>
        <div class="col-lg-5  mt-5 mt-lg-0">
          <div class="appContainer">
            <img class="img-fluid" src="imageshome/appimage.png" alt="" srcset="">

          </div>
        </div>
      </div>
    </div>
  </section>

<section id="footer">
<div class="container">
    <div class="row">
        <div class="col-lg-3">
        <div class="footerContainer">
            <h5>Services</h5>
            <ul>
            <li><i class="fas fa-angle-right"></i> Support </li>
            <li><i class="fas fa-angle-right"></i> About </li>
            <li><i class="fas fa-angle-right"></i> Terms </li>
            <li><i class="fas fa-angle-right"></i> Privacy Policy </li>
            </ul>

        </div>
        </div>
        <div class="col-lg-3">
        <div class="footerContainer">
            <h5>Quick Links</h5>
            <ul>
            <li><i class="fas fa-angle-right"></i> Categories </li>
            <li><i class="fas fa-angle-right"></i> Cart </li>
            <li><i class="fas fa-angle-right"></i> About Us </li>
            <li><i class="fas fa-angle-right"></i> Contact Us </li>
            <li><i class="fas fa-angle-right"></i> Login </li>
            </ul>
            
        </div>
        </div>
        <div class="col-lg-3">
        <div class="footerContainer">
            <h5>Contact Us</h5>
            <ul>
            <li><i class="fas fa-phone-alt"></i> 9169068212 </li>
            <li><i class="fas fa-phone-alt"></i> 8457693211 </li>
            <li><i class="fas fa-envelope"></i>example@gmail.com </li>
            <li><i class="fas fa-envelope"></i>example@gmail.com </li>
            <li><i class="fas fa-map-marker-alt"></i> Panvel, Navi mumbai </li>
            </ul>
            
        </div>
        </div>
        <div class="col-lg-3">
        <div class="footerContainer sociallinks">
            <h5>Social Links</h5>
            <ul>
            <li><i class="fab fa-facebook"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-twitter"></i></li>
            <li></li>
            <li></li>
        </ul>


            
        </div>
        </div>

    </div>
</div>
</section>

<script>
  var typed = new Typed('#selectc', {
    strings: [

     
     
     "Select Your Category",
    
    ],

    typeSpeed: 100,
    backSpeed: 100,
    loop: true,
  });
</script>

<script>
  var typed = new Typed('#selectp', {
    strings: [

     
     
     "Select Your Product",
    
    ],

    typeSpeed: 110,
    backSpeed: 110,
    loop: true,
  });
</script>

<script>
  var typed = new Typed('#add', {
    strings: [

     
     
     "Add to Cart",
    
    ],

    typeSpeed: 180,
    backSpeed: 180,
    loop: true,
  });
</script>

<script>
  var typed = new Typed('#order', {
    strings: [

     
     
     "Order and Enjoy!",
    
    ],

    typeSpeed: 130,
    backSpeed: 130,
    loop: true,
  });
</script>

</body>
</html>