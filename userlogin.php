<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<meta charset="utf-8">
  <title>Reveal Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  

  <style>
    img 
    {
      width: 50px;
    }
    .user-login-container 
    {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }
    .login-section 
    {
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 40px;
      max-width: 1200px;
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
    }
   .login-section img 
   {
     width: 50%;
     height: auto;
     border-radius: 10px;
     object-fit: cover;
   }
  .image-container, .form-container
  {
    flex: 1;
    padding: 20px;
  }
  .login-form h1
  {
    color: #2e8bc0;
    text-align: center;
    margin-bottom: 20px;
    font-weight:bold;
    text-shadow: 0.4rem 0.3rem 0px rgba(0, 0, 0, .2);
  }
  .login-form label
  {
    color: #000000;
    font-weight:bold;
  }
  .login-form .form-control 
  {
    height: 45px;
    border-radius: 5px;
    margin-bottom: 20px;
  }
  .login-form .btn 
  {
    width: 50%;
    padding: 10px;
    margin-bottom: 10px;
    margin-right: 10px;
  }
  .login-form .btn-group 
  {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .login-form .register-link 
  {
    display: block;
    text-align: center;
    margin-top: 20px;
    font-size: 16px;
  }
  </style>

 
</head>

<body>
<?php
if(isset($_POST["idd"])=="loginfail")
{
  echo"<script>alert('Login unsuccessfull')</script>";
  }
?>
<body id="body">


  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
      <h1><a href="#body" class="scrollto"><font size="+3"><img src="./img/discussion.png" alt="">&nbsp;ConsultPro Consultancy</font></a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          
          <li><a href="feedback.php">feedback</a></li>
          
          <li><a href="contact.php">Contact</a></li>
          <li class="menu-has-children"><a href="">Login</a>
            <ul>
              <li><a href="login.php">Admin Login</a></li>
              <li><a href="userlogin.php">User Login</a></li>
             
            </ul>
			    </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  
    <!--==========================
      About Section
    ============================-->
    
    <div class="user-login-container">
    <div class="login-section">
        <div class="image-container">
            <img src="img/permission.png" alt="User Image">
        </div>
        <div class="form-container">
            <div class="login-form">
                <h1>User Login</h1>
                <form method="post" action="userquery.php">
                    <div class="form-group">
                        <label for="field1">User Name</label>
                        <input type="text" name="field1" class="form-control" id="field1" required>
                    </div>
                    <div class="form-group">
                        <label for="field2">Password</label>
                        <input type="password" name="field2" class="form-control" id="field2" maxlength="10" required>
                    </div>
                    <div class="btn-group">
                        <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary">Cancel</button>
                    </div>
                    <div class="text-center">
                        <a href="password.php" class="d-block mt-3" style="color:black; font-weight:bold; font-size:20px;">Change Password</a>
                    </div>
                    <div class="register-link">
                        <a href="registration1.php" class="btn btn-success">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
      
   

  

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>


</body>
</html>
