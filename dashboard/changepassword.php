<?php


 include("config.php");

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


$selected = mysqli_select_db($con, "proschol_pro")  
or die("Could not select Database");  
//query fire  
$result = mysqli_query($con,"select *from users where email like '$email';"); 
$row = mysqli_fetch_assoc($result);
$originalpass=$row['Password'];

                                    

if(isset($_POST['btn_pas']))
{
  $old=$_POST['oldpass'];
  $new=$_POST['newpass'];
  if($old==$originalpass)
  {
    $newsql="UPDATE users SET Password = '$new' WHERE email='$email'";
    if(mysqli_query($con, $newsql)){
      echo "Password Changed Successfully";
 header("Location: https://proscholarship.co.in/dashboard/index.php");
 }else {
    echo "Error updating record: " . mysqli_error($con);
}

  }
  else
  {
    echo "Invalid Password";
  }

}


 
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PRO Scholarship </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="css/materialdesignicons.min.css">
  <link rel="stylesheet" href="css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body><br>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
   <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="index.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="editapplication.php">Edit Application</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="documents.php">My Documents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="printapplication.php">Print Application</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="status.php">Check Status</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="changepassword.php">Change Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admitcard.php">Admit Card</a>
        </li>
      </ul>
      
    </div>
  </nav>
      <!-- partial -->
     
            <div class="col-12 grid-margin">

              <div class="card">
                <div class="card-body">

                  <h4 class="card-title">Application ID: PRO_208<?php echo $row['ID'] ?></h4>
                  
      
                  <form class="form-sample" action="changepassword.php" method="POST">
                  <label>Old Password: </label>
                  <input type="Password" name="oldpass"></input>
                  <br>
                   <label>New Password: </label>
                  <input type="Password" name="newpass"></input>
    <input type="submit" class="btn btn-gradient-primary btn-rounded btn-fw" name="btn_pas" value="CHANGE PASSWORD"></input>
                    </div>
                    
                  </form>
                       

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://pramod.xyz" target="_blank">Pro Scholarship</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>
</html>