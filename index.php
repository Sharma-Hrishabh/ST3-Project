<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
<title>SabKuch</title>
<link href="./css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="./css/swiper.css">
<link href="./css/style.css" rel="stylesheet">
<link href="./login-system/css/css.html" rel="stylesheet">
    <link href="./css/font-awesome.min.css" rel="stylesheet">
 <script src="./login-system/js/index.js"></script>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.htm">SabKuch</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="./aboutus.php">ABOUT</a></li>
             <?php if(isset($_SESSION['logged_in']))
            {
              echo '<li><a href="./login-system/logout.php">LOGOUT</a></li>';
            }
            else
            {
              echo '<li><a href="./login-system/index2.php">LOGIN OR SIGNUP</a></li>';

        }
            ?>
            <li class="dropdown">
              <a href="./index.htm" class="dropdown-toggle" data-toggle="dropdown">STORES<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="food/food.php">Food</a></li>
                <li><a href="general/general.php">Daily Needs</a></li>
                <li><a href="medical/medical.php">Medical</a></li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>


<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h3>Feeling tired?</h3>
					<h1>Don`t want to go outside for getting food and other needs?</h1>
					<h3>Don`t Worry!</h3>
					<h1>Yahaan Milega.....</h1>
				</div>


				<div class="col-lg-8 col-lg-offset-2 himg">
					<img src="./images/1.png" class="img-responsive" class="logo" style="margin-top:5px; margin-left: -10px">
				</div>


			</div>
	    </div>
</div>



<div class="container-fluid" id="slider">
<div class="swiper-container col-lg-8 col-lg-offset-2 himg">
    <div class="swiper-wrapper">
      <!-- <div class="swiper-slide"><img src="./images/f1.jpg"></div> -->
      <!-- <div class="swiper-slide"><img src="./images/f6.jpg"></div> -->
      <div class="swiper-slide"><img src="./images/a.jpg"></div>
      <div class="swiper-slide"><img src="./images/m2.jpg"></div>
      <div class="swiper-slide"><img src="./images/m1.jpg"></div>
      <!-- <div class="swiper-slide"><img src="./images/m3.jpg"></div> -->
      <!-- <div class="swiper-slide"><img src="./images/g1.jpg"></div> -->
      <!-- <div class="swiper-slide"><img src="./images/d1.jpg"></div> -->

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

</div>
</div>

<script
              src="https://code.jquery.com/jquery-3.2.1.min.js"
              integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
              crossorigin="anonymous"></script>


                <script src="./js/swiper.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>


<div class="container-fluid" style="min-height:150px;"></div>


<div class="container-fluid">
<div class="tile" id="tile1">
<img class="card-img-top" src="./icons/foodw.png" alt="Card image cap">
<h4>Food Shop</h4>
<p class="card-text">Feeling Hungry?? ,Order kar na Yaar!<br>,All kinds of tasty <br>food products <br>at your door  </p>
    <a href="./food/food.php" class="btn btn-primary">Enter The Shop</a>

</div>
<div class="tile" id="tile2">
<img class="card-img-top" src="./icons/shoppingw.png" alt="Card image cap">
<h4>General Store</h4>
<p class="card-text">Want any stationary,aur daily need product<br> and small eatables like <br>chips,milk,biscuits etc. ? <br>All is Here</p>
    <a href="./general/general.php" class="btn btn-primary">Enter The Shop</a>

</div>
<div class="tile" id="tile3">
<img class="card-img-top" src="./icons/medicalw.png" alt="Card image cap">
<h4>Medical Shop</h4>
<p class="card-text">A Single click connection between you<br> and Medical Stores nearby.<br>
    All medicines will be<br>available here. </p>
    <a href="./medical/medical.php" class="btn btn-primary">Enter The Shop</a>

</div>
</div>

<div class="container-fluid" style="min-height:150px;"></div>


<div id="footerwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h4>About</h4>
          <div class="hline-w"></div>
          <p>SabKuch is One place for more than one things</p>
        </div>
        <div class="col-lg-4">
          <h4>Social Links</h4>
          <div class="hline-w"></div>
          <p>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
          </p>
        </div>
        <div class="col-lg-4">
          <h4>Our Bunker</h4>
          <div class="hline-w"></div>
          <p>
            NIT Surat Campus,<br>
            Surat,<br>
            Gujarat.          </p>
        </div>

      </div>
    </div>
   </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	<script src="./js/retina-1.1.0.js"></script>
	<script src="./js/jquery.hoverdir.js"></script>
	<script src="./js/jquery.hoverex.min.js"></script>
	<script src="./js/jquery.prettyPhoto.js"></script>
  	<script src="./js/jquery.isotope.min.js"></script>
  	<script src="./js/custom.js"></script>









	</body>
	</html>
