<?php

$data = $_POST;
$mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.
define('HOST','localhost:3306');
 define('USERNAME', 'proschol_admin');
 define('PASSWORD','Inspiron@123');
 define('DB','proschol_pro');
 
 $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);

$payment_id=$data['payment_id'];
$offer_slug=$data['offer_slug'];
$offer_title=$data['offer_title'];
$buyer_name=$data['buyer_name'];
$buyer_phone=$data['buyer_phone'];
$buyer=$data['buyer'];
$amount=$data['amount'];
$fees=$data['fees'];
$mac=$data['mac'];
$unit_price=$data['unit_price'];
$quantity=$data['quantity'];
$currency=$data['currency'];
$status=$data['status'];

$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];

if($major >= 5 and $minor >= 4){
     ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
     uksort($data, 'strcasecmp');
}

// You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
// Pass the 'salt' without the <>.
$mac_calculated = hash_hmac("sha1", implode("|", $data), "5a05d92aac274736af424919ad06de44");

if($mac_provided == $mac_calculated){
    echo "MAC is fine";

    // Do something here
    if($data['status'] == "Credit"){
        $sql = "insert into payements (payment_id,offer_slug,offer_title,buyer_name,buyer_phone,buyer,amount,fees,mac,unit_price,quantity,currency,status) values ('$payment_id','$offer_slug','$offer_title','$buyer_name','$buyer_phone','$buyer','$amount','$fees','$mac','$unit_price','$quantity','$currency','$status')";
 
 if(mysqli_query($con, $sql)){
 header("Location: https://proscholarship.co.in/dashboard/index.php");
 }
       // Payment was successful, mark it as completed in your database  
    }
    else{
       // Payment was unsuccessful, mark it as failed in your database
    }
}
else{
    echo "Invalid MAC passed";
}
?>