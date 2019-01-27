<?php
 define('HOST','localhost:3306');
 define('USERNAME', 'proschol_admin');
 define('PASSWORD','Inspiron@123');
 define('DB','proschol_pro');
  session_start();
    if(isset($_SESSION['ID']))
    {
      $email=$_SESSION['ID'];
    }
    else
    {
      $site= "<script type='text/javascript'>window.location='https://proscholarship.co.in/login.php'</script>";
        echo $site;
    }

 $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);


$selected = mysqli_select_db($con, "proschol_pro")  
or die("Could not select Database");  
 $name = $_POST['name'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $state=$_POST['state'];
 $gender=$_POST['gender'];
  $father=$_POST['father'];
   $mother=$_POST['mother'];
    $address=$_POST['address'];
 $bankacc=$_POST['bankacc'];
 $ifsc=$_POST['ifsc'];
 $aadhar=$_POST['aadhar'];
 $dob=$_POST['dob'];
  $disability=$_POST['disability'];
   $tenpass=$_POST['tenpass'];
    $twelvepass=$_POST['twelvepass'];
     $tenschool=$_POST['tenschool'];
      $twelveschool=$_POST['twelveschool'];
       $marks=$_POST['marks'];
        $pin=$_POST['pin'];

  $sql = "UPDATE users SET disability='$disability',tenpass='$tenpass',twelvepass='$twelvepass',tenschool='$tenschool',twelveschool='$twelveschool',marks='$marks',pin='$pin',Name='$name',Phone='$phone',state='$state',DOB='$dob',Gender='$gender',father='$father',mother='$mother',address='$address',Acc_number='$bankacc',IFSC='$ifsc',Aadhar_No='$aadhar' where email='$email'" ;

 if(mysqli_query($con, $sql)){
 header("Location: https://proscholarship.co.in/dashboard/index.php");
 }else {
    echo "Error updating record: " . mysqli_error($con);
}

 
 
?>