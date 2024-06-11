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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
 .registration-container 
 {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50%;
    padding: 20px;
}
.registration-section 
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
 .registration-section img 
 {
   width: 80%;
   height: auto;
   border-radius: 10px;
   object-fit: cover;
  }
  .image-container, .form-container 
  {
    flex: 1;
    padding: 25px;
  }
  .registration-form h1 
  {
   color: #2e8bc0;
   text-align: center;
   font-weight:bold;
   margin-bottom: 20px;
   text-shadow: 0.4rem 0.3rem 0px rgba(0, 0, 0, .2);
  }
  .registration-form label 
  {
    color: #000000;
    font-weight:bold;
  }
  .registration-form .form-control 
  {
    height: 45px;
    border-radius: 5px;
    margin-bottom: 20px;
  }
  .registration-form .btn 
  {
    padding: 10px;
    width: 50%;
    margin-bottom: 10px;
    margin-right: 10px;
  }
  .registration-form .btn-group
  {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .back-button
  {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    float:right;
    color: white;
    border: none;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s;
    margin-top: 5px; /* Adjust margin to align with the logo */
  }
  .back-button:hover 
  {
    background-color: #0056b3;
    color:white;
  }
 </style>
</head>

<body>
<?php
include "conn.php";

if(isset($_GET["mode"])=="save")
{
echo"<script>alert('Record inseterd successfully')</script>";
}
?>
<body id="body">

<!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
      <h1><a href="#body"><font size="+3"><img src="./img/discussion.png" alt="">&nbsp;ConsultPro Consultancy</font></a></h1>
      </div>

     <!-- Back Button -->
      <a href="userlogin.php" class="back-button">Back</a><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->



    <!--==========================
      Registartion Section
    ============================-->
    
    <div class="registration-container">
    <div class="registration-section">
        <div class="form-container">
            <div class="registration-form">
                <h1>Registration</h1>
                <form method="post" action="regquery.php">
                    <div class="form-group">
                        <label for="field1">Your Name</label>
                        <input type="text" name="field1" class="form-control" id="field1" required>
                    </div>
                    <div class="form-group">
                        <label for="field2">Your ContactNo.</label>
                        <input type="text" name="field2" class="form-control" id="field2" required>
                    </div>
                    <div class="form-group">
                        <label for="field3">Your Email</label>
                        <input type="email" name="field3" class="form-control" id="field3" required>
                    </div>
                    <div class="form-group">
                        <label for="field4">User Name</label>
                        <input type="text" name="field4" class="form-control" id="field4" required>
                    </div>
                    <div class="form-group">
                        <label for="field5">Password</label>
                        <input type="password" name="field5" class="form-control" id="field5" required>
                    </div>
                    <div class="btn-group">
                        <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="image-container">
            <img src="img/email.png" alt="Registration Image">
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
