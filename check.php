<?php
    include("config.php");

   $myusername =$_POST['email'];
   $mypassword = $_POST['password'];
   session_destroy(); 




$con = mysqli_connect('localhost:3306','proschol_admin','Inspiron@123','proschol_pro');
$selected = mysqli_select_db($con, "proschol_pro")  
or die("Could not select Database");  
//query fire  
$result = mysqli_query($con,"select *from users where email='$myusername' and password='$mypassword';"); 
$row = mysqli_fetch_assoc($result);
   
  
      $rowcount=mysqli_num_rows($result);
      
      
      if((int)$rowcount>0)
      {
          session_start();
    
      $_SESSION["ID"] = $myusername;
    

        $site= "<script type='text/javascript'>window.location='https://proscholarship.co.in/dashboard/index.php?email=".$myusername."'</script>";
        echo $site;
    
      }
      else
      {
         echo "Invalid Username/Password. <a href='login.php'>Click Here To Try Again</a>";
      }
      
 
     
      

?>