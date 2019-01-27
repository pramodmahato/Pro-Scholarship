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
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="<?php echo $row['Photo'] ?>" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><?php echo $row['Name'] ?></span>
                <span class="text-secondary text-small"></span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="editapplication.php?email=<?php echo $email?>">
              <span class="menu-title">Edit Application</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documents.php?email=<?php echo $email?>">
              <span class="menu-title">My Documents</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="printapplication.php?email=<?php echo $email?>">
              <span class="menu-title">Print Application</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admitcard.php?email=<?php echo $email?>">
              <span class="menu-title">Print Admit Card</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="status.php?email=<?php echo $email?>">
              <span class="menu-title">Check Status</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="changepassword.php?email=<?php echo $email?>">
              <span class="menu-title">Change Password</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item sidebar-actions">
            <span class="nav-link">
              
              <button class="btn btn-block btn-lg btn-gradient-primary mt-4">SIGN OUT</button>
              
            </span>
          </li>
        </ul>
      </nav>
      <!-- partial -->
   
     
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Application ID: PRO_208<?php echo $row['ID'] ?></h4>
                  <form class="form-sample" action="Twelve.php" method="POST" enctype="multipart/form-data">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="form-group">
                      <label>12th Marksheet</label>
                        <div class="input-group col-xs-12">
                      <?php
                      $filepath=$row['Twelve'];
                      if(empty($filepath))
                      {
                        echo "<input type='file' name='Twelve' placeholder='Upload 12th Marksheet'>";
                      }
                      else{
                        echo "<img src='$filepath' height='200px'></img><br>";
                      }
                      ?>
                      </div>
                    </div>
                       <button type="submit" name="btn_upload" class="btn btn-gradient-primary btn-rounded btn-fw">UPLOAD</button>
                    </div>
                  </form>
                  <?php
                   include("config.php");

$selected = mysqli_select_db($con, "proschol_pro")  
or die("Could not select Database");  
if(isset($_POST['btn_upload']))
{
  $filetmp = $_FILES["Twelve"]["tmp_name"];
  $filename = $_FILES["Twelve"]["name"];
  $filepath = "uploads/TwelveMark/".$email."".$filename;

  
  move_uploaded_file($filetmp,$filepath);

 $sql = "UPDATE users SET Twelve='$filepath' where email='$email'" ;
   if(mysqli_query($con, $sql)){
 header("Location: https://proscholarship.co.in/dashboard/documents.php");
 }else {
    echo "Error Uploading Images: " . mysqli_error($con);
}
}
?>

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