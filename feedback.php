<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>ConsultPro Consultancy</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
  .feed-img 
  {
      text-align: center;
  }
  .feed-img img 
  {
      width: 80%;
      height: auto;
      border-radius: 8px;
      margin: 0 auto;
      display: block; /* Ensures the image behaves as a block element */
  }
  .form-style-1 
  {
    list-style: none;
    padding: 0;
  }
  .form-style-1 th, .form-style-1 td 
  {
    padding: 10px;
  }
  .form-style-1 label 
  {
    font-weight: bold;
  }
  .form-style-1 input[type="text"],
  .form-style-1 input[type="email"],
  .form-style-1 textarea 
  {
      border: 1px solid #ccc;
      padding: 10px;
      border-radius: 4px;
      width: 100%;
      box-sizing: border-box;
      
  }
  .form-style-1 input[type="submit"] 
  {
      background-color: #007bff;
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 4px;
  }
  .form-style-1 input[type="submit"]:hover 
  {
    background-color: #0056b3;
  }
 </style>
</head>
<body>

<?php
include("conn.php");
if(isset($_GET["mode"])=="save")
{
echo"<script>alert('Record inseterd successfully')</script>";
}
?>
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <h1><a href="#" style="font-size:30px; text-decoration:none;"><img src="./img/discussion.png" alt="">&nbsp; ConsultPro Consultancy</a></h1>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="feedback.php">Feedback</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li class="menu-has-children"><a href="">Login</a>
            <ul>
              <li><a href="login.php">Admin Login</a></li>
              <li><a href="userlogin.php">User Login</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <!--==========================
    Services Section
  ============================-->
 <section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 feed-img">
        <img src="img/feedback1.png" alt="About Image">
      </div>
      <div class="col-lg-6 content">
        <h2 class="text-center" style="font-weight: bold; font-size:35px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;  Feedback</h2>
        <br><br>
        <form method="post" action="feedquery.php">
          <ul class="form-style-1">
            <div class="form-group row">
              <label for="field1" class="col-sm-4 col-form-label">Full Name</label>
              <div class="col-sm-8">
                <input type="text" name="field1" class="form-control" id="field1" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="field2" class="col-sm-4 col-form-label">Mobile Number</label>
              <div class="col-sm-8">
                <input type="tel" name="field2" class="form-control" id="field2" maxlength="10" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="field3" class="col-sm-4 col-form-label">Email</label>
              <div class="col-sm-8">
                <input type="email" name="field3" class="form-control" id="field3" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="field5" class="col-sm-4 col-form-label">Your Message</label>
              <div class="col-sm-8">
                <textarea name="field5" id="field5" class="form-control" rows="4"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12 text-center">
                <input type="submit" value="Submit" name="Submit" class="btn btn-primary">
                <input type="reset" value="Cancel" class="btn btn-secondary">
              </div>
            </div>
          </ul>
        </form>
      </div>
    </div>
  </div>
</section><!-- #about -->

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
