<?php
    include("config.php");
    
   $newpass =$_POST['newpass'];
   $email=$_POST['email'];
$con = mysqli_connect('localhost:3306','proschol_admin','Inspiron@123','proschol_pro');
$selected = mysqli_select_db($con, "proschol_pro")  
or die("Could not select Database");  
//query fire  
$sql="update users SET Password='$newpass' where Email='$email';";
 if(mysqli_query($con, $sql)){
  echo "SUCCESS";
 header("Location: https://proscholarship.co.in/login.php");
 }else {
    echo "Error updating record: " . mysqli_error($con);
}
      

?>