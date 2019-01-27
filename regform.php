
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>PRO Scholarship - A National Scholarship Program</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/fresh/css/datepicker.css"></link>
 <link rel="stylesheet" href="/fresh/css/bootstrap.min.css"></link>
        <link rel="stylesheet" href="/fresh/css/bootstrap-theme.min.css"></link>
        <link rel="stylesheet" href="/fresh/css/jquery.dataTables.min.css"></link>
        <link rel="stylesheet" href="/fresh/css/style2.css"></link>
        <link rel="stylesheet" href="/fresh/css/csswickedpicker.css"></link>
      
        <script src="/fresh/js/jquery.js"></script>
        <script src="/fresh/js/bootstrap-datepicker.js"></script>
        <script src="/fresh/js/jquery.dataTables.min.js"></script>
        <script src="/fresh/js/bootstrap.min.js"></script>
        <script src="/fresh/js/bootbox.min.js"></script>
        <script src="/fresh/js/sql.js"></script>
        <script src="/fresh/js/alert.js"></script>
        <script src="/fresh/js/jsencrypt.js"></script>
         <link rel="stylesheet" href="/fresh/css/font-awesome.min.css"></link>
    <style type="text/css">
        table,th,tr,td{
            border: 1px solid black;
            border-top-right-radius: 10px;
            padding: 10px 10px 10px 20px;
        }
        
       
    </style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medilife-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="h-100 d-md-flex justify-content-between align-items-center">
                            <p>Application Dates Closing Soon</p>
                            <p>For Queries Call Us On: <span><a href="tel:+917419501884">Toll Free: +91-7419501884 (24*7)</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                           <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="index.php"><img src="img/core-img/logo.png" width="150px" alt="Logo"></a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Programs</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="proscholarship.html">Pro Scholarship Test</a>
                                                
                                               
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="faqs.html">FAQs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dates.html">Important Dates</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.php">Log In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                    <!-- Appointment Button -->
                                    <a href="regform.php" class="btn medilife-appoint-btn ml-30">APPLY NOW</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    
    <!-- ***** Breadcumb Area End ***** -->
<br>
<br>
<br>
    <section class="medilife-contact-area section-padding-100" style="overflow-y: scroll;">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8" >
                    <div class="contact-form"  style="overflow-y: scroll;">
                        <h5 class="mb-50" align="center"><br>Registration Form</h5>

                        <form action="insert.php" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="contact-name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" id="contact-email" name="email" placeholder="Email ID">
                            </div>
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" class="form-control" id="contact-number" name="number" placeholder="Contact Number">
                            </div>
                            
                            <div class="form-group">
                                <label>State</label><br>
                                <select  id="state" name="state"> 
                                    <option>Rajasthan</option>
                                                    <option>Andhra Pradesh</option>
                                                    <option>Arunachal Pradesh</option>
                                                    <option>Assam</option>
                                                    <option>Bihar</option>
                                                    <option>Chhattisgarh</option>
                                                    <option>Goa</option>
                                                    <option>Gujarat</option>
                                                    <option>Haryana</option>
                                                     <option>Himachal Pradesh</option>
                                                    <option>Jammu and Kashmir</option>
                                                    <option>Jharkhand</option>
                                                    <option>Karnataka</option>
                                                    <option>Kerala</option>
                                                    <option>Madhya Pradesh</option>
                                                    <option>Maharashtra</option>
                                                     <option>Manipur</option>
                                                    <option>Meghalaya</option>
                                                    <option>Migoram</option>
                                                    <option>Nagaland</option>
                                                    <option>Odisha</option>
                                                    <option>Punjab</option>
                                                    
                                                    <option>Sikkim</option>
                                                    <option>Tamil Nadu</option>
                                                    <option>Telangana</option>
                                                     <option>Tripura</option>
                                                    <option>Uttarakhand</option>
                                                    <option>West Bengal</option>
                                                    <option>Andaman and Nicobar Islands</option>
                                                    <option>Chandigarh</option>
                                                    <option>Dadrz and Nagar Haveli</option>
                                                     <option>Daman and Diu</option>
                                                    <option>Delhi</option>
                                                    <option>Lakshadweep</option>
                                                    <option>Puducherry</option>

                                                </select>
                            </div><br><br>
                            
                            <div class="form-group"><br>
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" id="contact-password" placeholder="Password">
                            </div>
                            
                            <button type="submit" class="btn medilife-btn">REGISTER <span>+</span></button>
                        </form>


                    </div>
                </div>

              
        </div>
    </section>

    <!-- Google Maps -->
   

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-100">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="footer-logo">
                                <img src="img/core-img/logo.png" alt="">
                            </div>
                            <p>India's Best Scholarship Program for Under Graduate Students.</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>FAQs</h6>
                            </div>
                            <div class="widget-blog-post">
                                <!-- Single Blog Post -->
                                <div class="widget-single-blog-post d-flex">
                                    <div class="widget-post-thumbnail">
                                        <img src="img/blog-img/ln1.jpg" alt="">
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="#">What are the Benefits?</a>
                                        <p>Aug 09, 2018</p>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="widget-single-blog-post d-flex">
                                    <div class="widget-post-thumbnail">
                                        <img src="img/blog-img/ln2.jpg" alt="">
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="#">How to Enroll for Scholarship?</a>
                                        <p>Aug 09, 2018</p>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="widget-single-blog-post d-flex">
                                    <div class="widget-post-thumbnail">
                                        <img src="img/blog-img/ln3.jpg" alt="">
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="#">Who is Eligible?</a>
                                        <p>Aug 09, 2018</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>Enquiry Form</h6>
                            </div>
                            <div class="footer-contact-form">
                                <form action="#" method="post">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="footer-name" id="footer-name" placeholder="Name">
                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0" name="footer-email" id="footer-email" placeholder="Email">
                                    <textarea name="message" class="form-control border-top-0 border-right-0 border-left-0" id="footerMessage" placeholder="Message"></textarea>
                                    <button type="submit" class="btn medilife-btn">Contact Us <span>+</span></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>News Letter</h6>
                            </div>

                            <div class="footer-newsletter-area">
                                <form action="#">
                                    <input type="email" class="form-control border-0 mb-0" name="newsletterEmail" id="newsletterEmail" placeholder="Your Email Here">
                                    <button type="submit">Subscribe</button>
                                </form>
                                <p>Enter your Email ID and we will send you our updates and you will never miss any offer or oppurtunities related to Scholarships.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="bottom-footer-content">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Alura Inc
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                   </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>