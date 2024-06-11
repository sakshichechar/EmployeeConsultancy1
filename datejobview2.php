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
.bg 
{
    background-color: #f8f9fa; /* Light background color */
    padding: 50px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 600px; /* Adjust as needed */
    margin: 0 auto; /* Center the container horizontally */
    display: flex;
    flex-direction: column;
    align-items: center;
}
.form-style-1 
{
    width: 80%;
    max-width: 600px; /* Adjust max-width as needed */
}

.form-group 
{
    margin-bottom: 20px;
}

.btn 
{
    padding: 10px 20px;
    font-size: 16px;
}

.heading 
{
    text-align: center;
    margin-bottom: 30px;
}

.form-group 
{
    margin-bottom: 20px;
}

.form-control 
{
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.btn-container 
{
    text-align: center;
}

.btn 
{
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
}

.btn-secondary {
    background-color: #6c757d;
    color: #fff;
    border: none;
}

.btn:hover {
    background-color: #0056b3; /* Darker shade for hover effect */
}

/* Responsive styles */
@media screen and (max-width: 768px) {
    .form-style-1 {
        width: 90%;
    }
    h1 
    {
      font-size:18px;
    }
}

@media screen and (max-width: 576px) {
    .form-style-1 {
        width: 100%;
    }

    .btn {
        width: 100%;
        margin-bottom:10px;
    }
   #logo h1 
    {
      font-size:14px;
    }
}
 </style>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container ">

      <div id="logo" class="pull-left">
      <h1><a href="#body"><font size="+3"><img src="./img/discussion.png" alt="">&nbsp;ConsultPro Consultancy</font></a></h1>        
      </div>

      <!-- Back Button -->
      <a href="userhome.php" class="back-button">Back</a>
    </div>
  </header>

    <!--==========================
      About Section
    ============================-->
<div class="bg">
    <h1 class="heading">View Job Details</h1>
    <form method="post" action="jobview1.php" class="form-style-1">
        <div class="form-group">
            <label for="txtdt">Select Date:</label>
            <input type="date" name="txtdt" id="txtdt" class="form-control" />
        </div>
        <div class="btn-container">
            <input type="submit" value="Submit" name="Submit" class="btn btn-primary" />
            <input type="submit" value="Cancel" class="btn btn-secondary" />
        </div>
    </form>
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
