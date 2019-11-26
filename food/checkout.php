<?php
session_start();
$first_name=$_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email = $_SESSION['email'];
$active = $_SESSION['active'];
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['order'])) {
        require 'order.php';

    }

}




?>
<?php
$_SESSION['hostel'] = $_POST['hostel'];
// $_SESSION['contact_no'] = $_POST['contact'];
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
<title>Checkout</title>
<link href="../css/bootstrap.css" rel="stylesheet">

<link href="../css/style.css" rel="stylesheet">
<link href="../css/cart.css" rel="stylesheet">


    <link href="../css/font-awesome.min.css" rel="stylesheet">


</head>
<title>Checkout</title>
<body>

	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container style="margin-bottom:50px;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">SabKuch</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="../index.php">HOME</a></li>
            <li><a href="../aboutus.php">ABOUT</a></li>

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
              <a href="../main.htm" class="dropdown-toggle" data-toggle="dropdown">STORES<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="cart.php">Food</a></li>
                <li><a href="dailyneeds.htm">Daily Needs</a></li>
                <li><a href="medical.htm">Medical</a></li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

<div class="container text-center" style="margin-top:100px">
	<?php echo "<h4>Hey,".$first_name."....</h4>"; ?>
<h5>Fillup The Below Form To Place Your Order</h5>
<form  method="post" action="checkout.php">
	<div id="hostel">
		<div class="field-wrap">
<h3>Select Hostel<span class="req">*</span><br></h3><br>
<label>Gajjar Bhavan</label>
<input type="radio" name="hostel" value="gajjar_bhavan"><br>
<label>Swami Vivekanand Bhavan</label>
<input type="radio" name="hostel" value="swami_vivekanand_bhavan"><br>
<label>Bhabha Bhavan</label>
<input type="radio" name="hostel" value="bhabha_bhavan"><br>
<label>Sarabhai Bhavan</label>
<input type="radio" name="hostel" value="sarabhai_bhavan"><br>
<label>Tagore Bhavan</label>
<input type="radio" name="hostel" value="tagore_bhavan"><br>
<label>Nehru Bhavan</label>
<input type="radio" name="hostel" value="nehru_bhavan"><br>
<label>Raman Bhavan</label>
<input type="radio" name="hostel" value="raman_bhavan"><br>
<label>Narmad Bhavan</label>
<input type="radio" name="hostel" value="narmad_bhavan">
</div>
</div>
<div class="field-wrap">
<label>Enter Contact No.<span class="req">*</span></label><input type="text" name="contact" value="" autocomplete="off">
</div>
<div class="field-wrap text-center">
	<button type="submit" class="button button-block btn btn-group-justified" name="order">Order</button>
</div>
</form>
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
