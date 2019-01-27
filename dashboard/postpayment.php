<?php
$payment_id=$_POST['payment_id'];
$offer_slug=$_POST['offer_slug'];
$offer_title=$_POST['offer_title'];
$buyer_name=$_POST['buyer_name'];
$buyer_phone=$_POST['buyer_phone'];
$buyer=$_POST['buyer'];
$amount=$_POST['amount'];
$fees=$_POST['fees'];
$mac=$_POST['mac'];
$unit_price=$_POST['unit_price'];
$quantity=$_POST['quantity'];
$currency=$_POST['currency'];
$status=$_POST['status'];

define('HOST','localhost:3306');
 define('USERNAME', 'proschol_admin');
 define('PASSWORD','Inspiron@123');
 define('DB','proschol_pro');
 
 $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);



 	$sql = "insert into payements (payment_id,offer_slug,offer_title,buyer_name,buyer_phone,buyer,amount,fees,mac,unit_price,quantity,currency,status) values ('$payment_id','$offer_slug','$offer_title','$buyer_name','$buyer_phone','$buyer','$amount','$fees','$mac','$unit_price','$quantity','$currency','$status')";
 
 if(mysqli_query($con, $sql)){
 header("Location: https://proscholarship.co.in/dashboard/index.php");
 }

?>