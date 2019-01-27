<?php
 define('HOST','localhost:3306');
 define('USERNAME', 'proschol_admin');
 define('PASSWORD','Inspiron@123');
 define('DB','proschol_pro');
 
 $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
 
 $name = $_POST['name'];
 $pass = $_POST['password'];
 $phone=$_POST['number'];
 $email=$_POST['email'];
 $state=$_POST['state'];
 $gender=$_POST['gender'];
 $bankacc=$_POST['bankacc'];
 $ifsc=$_POST['ifsc'];
 $aadhar=$_POST['aadhar'];
 $dob=$_POST['date'];

  $sql = "SELECT count(email) FROM users WHERE email='$email'" ;

  $queryResult = $con->query($sql);
$foundRows = $queryResult->num_rows;

   if( $foundRows==0 ){
    echo "This Email is already registered.";
   }
   else
   {
   	$sql = "insert into users (Name,Phone,Email,State,Password) values ('$name','$phone','$email','$state','$pass')";
 
 if(mysqli_query($con, $sql)){
 header("Location: https://proscholarship.co.in/dashboard/index.php?email=".$email);
 }
   }
 
 
?>