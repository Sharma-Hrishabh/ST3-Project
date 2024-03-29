<?php

session_start();
$product_ids=array();
// session_destroy();
//to check add to cart is clicked or not
if(filter_input(INPUT_POST, 'add_to_cart'))
{
if(isset($_SESSION['shopping_cart']))
{  //to check number of orders in cart
	$count=count($_SESSION['shopping_cart']);
	//to create sequential array for matching array keys with product ids
$product_ids=array_column($_SESSION['shopping_cart'], 'id');
if(!in_array(filter_input(INPUT_GET, 'id'),$product_ids))
	{
		$_SESSION['shopping_cart'][$count]=array
	('id' => filter_input(INPUT_GET, 'id'),
		'name' => filter_input(INPUT_POST, 'name'),
		'price' => filter_input(INPUT_POST, 'price'),
          'quantity' => filter_input(INPUT_POST,'quantity')

			);

	}
	else{
		//product already exists, increase quantity
            //match array key to id of the product being added to the cart
            for ($i = 0; $i < count($product_ids); $i++){
                if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    //add item quantity to the existing product in the array
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
	}

}
else
{//if shopping cart doesnt exists create it with first product with array key as 0,create array with 0 key as start
	$_SESSION['shopping_cart'][0]=array
	('id' => filter_input(INPUT_GET, 'id'),
		'name' => filter_input(INPUT_POST, 'name'),
		'price' => filter_input(INPUT_POST, 'price'),
          'quantity' => filter_input(INPUT_POST,'quantity')

			);


}




}


if(filter_input(INPUT_GET, 'action') == 'delete'){
    //loop through all products in the shopping cart until it matches with GET id variable
    foreach($_SESSION['shopping_cart'] as $key => $product){
        if ($product['id'] == filter_input(INPUT_GET, 'id')){
            //remove product from the shopping cart when it matches with the GET id
            unset($_SESSION['shopping_cart'][$key]);
        }
    }
    //reset session array keys so they match with $product_ids numeric array
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}

//pre_r($_SESSION);

function pre_r($array)
{echo '<pre>';
print_r($array);
echo '</pre>';


}




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
<title>Stationary Shop</title>
<link href="../css/bootstrap.css" rel="stylesheet">

<link href="../css/style.css" rel="stylesheet">
<link href="../css/cart.css" rel="stylesheet">


    <link href="../css/font-awesome.min.css" rel="stylesheet">


</head>
<title>Stationary Shop</title>
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
          <a class="navbar-brand" href="index.html">SabKuch</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="../index.php">HOME</a></li>
            <li><a href="../aboutus.php">ABOUT</a></li>

           <?php if(isset($_SESSION['logged_in']))
            {
              echo '<li><a href="../login-system/logout.php">LOGOUT</a></li>';
            }
            else
            {
              echo '<li><a href="../login-system/index2.php">LOGIN OR SIGNUP</a></li>';

        }
            ?>
            <li class="dropdown">
              <a href="../main.htm" class="dropdown-toggle" data-toggle="dropdown">STORES<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../food/food.php">Food</a></li>
                <li><a href="./general.php">Daily Needs</a></li>
                <li><a href="../medical/medical.php">Medical</a></li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id="headerwrap">
         <div class="container">
          <div class="col-lg-12 col-md-4">
             <div class="row">
               <h3>Stationary Shop</h3>
               <img class="img-responsive" src="../images/st.jpg" style="width:50%;margin:auto;margin-top:30px;">

               </div>
               </div>
               </div>

	<div class="container">
<?php
$connect=mysqli_connect('localhost','root','','items');
$query='SELECT * FROM dailyneeds ORDER by id ASC';
$result=mysqli_query($connect,$query);

if($result):
 if(mysqli_num_rows($result)>0):
 	while($product=mysqli_fetch_assoc($result)):

 		?>
 		<div class="col-sm-4 col-md-3" style="margin-top: 160px">
 			<form method="post" action="general.php?action=add&id=<?php echo $product['id']; ?>">
                        <div class="products">
                            <img src="<?php echo $product['image']; ?>" class="img-responsive" style="height: 220px;width:100%"  />
                            <h4 class="text-info"><?php echo $product['name']; ?></h4>
                            <h4>₹ <?php echo $product['price']; ?></h4>
                            <input type="number" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="name" value="<?php echo $product['name']; ?>" />
                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info"
                                   value="Add to Cart" />
                        </div>
                    </form>
 		</div>

<?php
   endwhile;
    endif;
    endif;
?><div style="clear:both"></div>
        <br />
        <div class="table-responsive">
        <table class="table">
            <tr><th colspan="5"><h3>Order Details</h3></th></tr>
        <tr>
             <th width="40%">Product Name</th>
             <th width="10%">Quantity</th>
             <th width="20%">Price</th>
             <th width="15%">Total</th>
             <th width="5%">Action</th>
        </tr>
        <?php
        if(!empty($_SESSION['shopping_cart'])):

             $total = 0;

             foreach($_SESSION['shopping_cart'] as $key => $product):
        ?>
        <tr>
           <td><?php echo $product['name']; ?></td>
           <td><?php echo $product['quantity']; ?></td>
           <td>₹ <?php echo $product['price']; ?></td>
           <td>₹ <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>
           <td>
               <a href="general.php?action=delete&id=<?php echo $product['id']; ?>">
                    <div class="btn-danger">Remove</div>
               </a>
           </td>
        </tr>
        <?php
                  $total = $total + ($product['quantity'] * $product['price']);
             endforeach;
        ?>
        <tr>
             <td colspan="3" align="right">Total</td>
             <td align="right">₹ <?php echo number_format($total, 2); ?></td>
             <td></td>
        </tr>
        <tr>
            <!-- Show checkout button only if the shopping cart is not empty -->
            <td colspan="5">
             <?php
                if (isset($_SESSION['shopping_cart'])):
                if (count($_SESSION['shopping_cart']) > 0):
             ?>
                <a href="./checkout.php" class="button">Checkout</a>
             <?php endif; endif; ?>
            </td>
        </tr>
        <?php
        endif;
        ?>
        </table>
         </div>


</div>






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
            <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
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



	 <!-- <div class="container-fluid" style="min-height:150px;"></div> -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  <script src="../js/retina-1.1.0.js"></script>
  <script src="../js/jquery.hoverdir.js"></script>
  <script src="../js/jquery.hoverex.min.js"></script>
  <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>
    <script src="../js/custom.js"></script>

</body>
</html>
