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
                  <form class="form-sample" action="makechange.php" method="POST">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="<?php echo $row['Name'] ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" value="<?php echo $row['Email'] ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="gender" value="<?php echo $row['Gender'] ?>" />

                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Father's Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="father" value="<?php echo $row['father'] ?>" />

                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mother's Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="mother" value="<?php echo $row['mother'] ?>" />

                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Full Address</label>
                          <div class="col-sm-9">
                            <input type="textarea" rows="4" class="form-control" name="address" value="<?php echo $row['address'] ?>" />

                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Disability (Y/N)</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="disability" value="<?php echo $row['disability'] ?>" />

                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">10th Passing Year</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="tenpass" value="<?php echo $row['tenpass'] ?>" />

                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">12th Passing Year</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="twelvepass" value="<?php echo $row['twelvepass'] ?>" />

                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">10th School</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="tenschool" value="<?php echo $row['tenschool'] ?>" />

                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">12th School</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="twelveschool" value="<?php echo $row['twelveschool'] ?>" />

                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Marks</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="marks" value="<?php echo $row['marks'] ?>" />

                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Pin Code</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="pin" value="<?php echo $row['pin'] ?>" />

                          </div>
                        </div>
                      </div>
                      
                    </div>
                    
                    <p class="card-description">
                      Additional Info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Aadhar Card Number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="aadhar" value="<?php echo $row['Aadhar_No'] ?>"  />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="state" value="<?php echo $row['State'] ?>"  />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Birth Date</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" name="dob" value="<?php echo $row['DOB'] ?>"  />
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone Number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone" value="<?php echo $row['Phone'] ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Bank A/C Number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="bankacc" value="<?php echo $row['Acc_Number'] ?>"  />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Bank IFSC Code</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="ifsc" value="<?php echo $row['IFSC'] ?>" />
                          </div>
                        </div>
                      </div>
                       <button type="submit" class="btn btn-gradient-primary btn-rounded btn-fw">UPDATE</button>
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