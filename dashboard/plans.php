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
                <img src="i<?php echo $row['Photo'] ?>" alt="profile">
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
                  <form class="form-sample" action="Ten.php" method="POST" enctype="multipart/form-data">
                    <p class="card-description">
                      Choose Plan
                    </p><br>
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem; float: left">
  <div class="card-header" align="center">Rs 2000</div>
  <div class="card-body">
    <h5 class="card-title"><font color="white">Rs 29,000 Per Year</h5>
        If Student doesnt get Scholarship he/she will be refunded 1500.<br><br>
    <p class="card-text"></font></p>
    <a href="https://www.instamojo.com/Alura_Inc/pro-scholarship-rs-2000/" rel="im-checkout" data-behaviour="remote" data-style="flat" data-text="Choose Plan"></a>
<script src="https://js.instamojo.com/v1/button.js"></script>
  </div>
</div>
<div class="card text-white bg-success mb-3" style="max-width: 18rem;margin-left: 10px; float: left">
  <div class="card-header" align="center">Rs 5000</div>
  <div class="card-body">
    <h5 class="card-title"><font color="white">Rs 43,000 Per Year</h5>
    <p class="card-text">If Student doesnt get Scholarship he/she will be refunded 4500.</font></p>
    <a href="https://www.instamojo.com/Alura_Inc/pro-scholarship-rs-5000/" rel="im-checkout" data-behaviour="remote" data-style="flat" data-text="Choose Plan"></a>
<script src="https://js.instamojo.com/v1/button.js"></script>
  </div>
</div>
<div class="card text-white bg-info mb-3" style="max-width: 18rem;margin-left: 10px; float: left">
  <div class="card-header" align="center">Rs 7000</div>
  <div class="card-body">
    <h5 class="card-title"><font color="white">Rs 62,000 Per Year</h5>
    <p class="card-text">If Student doesnt get Scholarship he/she will be refunded 6300.</font></p>
    <a href="https://www.instamojo.com/Alura_Inc/pro-scholarship-rs-7000/" rel="im-checkout" data-behaviour="remote" data-style="flat" data-text="Choose Plan"></a>
<script src="https://js.instamojo.com/v1/button.js"></script>
  </div>
</div>
<div class="card text-white bg-danger mb-3" style="max-width: 18rem; margin-left: 10px; float: left">
  <div class="card-header" align="center">Rs 10,000</div>
  <div class="card-body">
    <h5 class="card-title"><font color="white">Rs 1,50,000 Per Year</h5>
    <p class="card-text">If Student doesnt get Scholarship he/she will be refunded 9000.</font></p>
    <a href="https://www.instamojo.com/Alura_Inc/pro-scholarship-rs-10000/" rel="im-checkout" data-behaviour="remote" data-style="flat" data-text="Choose Plan"></a>
<script src="https://js.instamojo.com/v1/button.js"></script>
  </div>
</div>
                    <div class="form-group">

                      

                        
                    </div>
                       
                    </div>
                    
                  </form>
                 <a href="index.php"> <input type="button" class="btn btn-gradient-primary btn-rounded btn-fw" value="GO TO DASHBOARD"></input></a>

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