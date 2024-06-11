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
  .password-change-container 
  {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70%;
    padding: 10px;
  }
  .password-change-section 
  {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    padding: 40px;
    max-width: 700px; /* Increased max-width */
    width: 100%;
  }
  .password-change-section h1 
  {
    color: #000000;
    text-align: center;
    margin-bottom: 20px;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
  }
  .password-change-section label 
  {
    color: #000000;
    font-weight: bold;
  }
  .password-change-section .form-group 
  {
    position: relative;
  }
  .password-change-section .form-control 
  {
    height: 40px; /* Increased height */
    font-size: 16px; /* Increased font size */
    border-radius: 5px;
    margin-bottom: 20px;
    width: 100%;
    padding-left: 40px; /* Space for the icon */
  }
  .password-change-section .form-group .fa 
  {
    position: absolute;
    left: 10px;
    top: 70%;
    transform: translateY(-50%);
    color: #000;
  }
  .password-change-section .btn 
  {
    padding: 10px 20px;
    margin-right: 10px;
    width: 50%;
  }
  .password-change-section .btn-group 
  {
    display: flex;
    justify-content: center;
    align-items: center;
  }
 </style>
</head>

<body>
<body id="body">
<?php
include("conn.php");
if(isset($_GET["idd"])=="update")
{
echo"<script>alert('password updated successfully')</script>";
}
?>
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
      <h1><a href="#body"><font size="+3"><img src="./img/discussion.png" alt="">&nbsp;ConsultPro Consultancy</font></a></h1>
      </div>
      <!-- Back Button -->
      <a href="userlogin.php" class="back-button">Back</a>
    </div>
  </header>

    <!--==========================
      Password Section
    ============================-->
   
    
    <section id="about" >
    <div class="container">
        <div class="password-change-container">
            <div class="password-change-section">
                <h1>Change Password</h1>
                <form method="post" action="paswordquery.php">
                    <div class="form-group">
                        <label for="field1">Old Password</label>
                        <i class="fa fa-lock"></i>
                        <input type="password" name="field1" class="form-control" id="field1" required>
                    </div>
                    <div class="form-group">
                        <label for="field2">New Password</label>
                        <i class="fa fa-key"></i>
                        <input type="password" name="field2" class="form-control" id="field2" required>
                    </div>
                    <div class="form-group">
                        <label for="field4">Confirm Password</label>
                        <i class="fa fa-key"></i>
                        <input type="password" name="field4" class="form-control" id="field4" required>
                    </div>
                    <div class="btn-group">
                        <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

 
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
