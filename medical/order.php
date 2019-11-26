<?php
session_start();
$first_name=$_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email = $_SESSION['email'];
$active = $_SESSION['active'];
$shop_email="xyz@gmail.com";
$contact_no=$_SESSION['contact_no'];
$hostel=$_SESSION['hostel'];
?>
<?php
        $to      = $email;
        $subject = 'Order Placed';
        $message_body = '
        Hello '.$first_name.',

        Your Order Has Been Placed Successfully.

        We will try to make you get your order in minimum time possible
  
        Have a Nice Day.......

        Don`t Reply to this message.It is computer a generated mail. 

        mail( $to, $subject, $message_body );
?>
<?php

        $to      = $shop_email;
        $subject = 'Order Demand'
        $message_body = 'Order Details:Name='.$first_name.' '.$last_name.' Mobile Number='.$contact_no.'
        foreach($_SESSION['shopping_cart'] as $key => $product): 
        ?>
        print_r($_SESSION);


    <?php endforeach;
    ?>


mail( $to, $subject, $message_body );
?>