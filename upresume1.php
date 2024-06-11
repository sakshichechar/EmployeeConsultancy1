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
    padding: 20px;
    /* background-color: #f8f9fa; */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  .container1 
  {
    max-width: 600px;
    margin: auto;
    padding: 20px;
    background-color:#e9ecef;
  }
  h1 
  {
    font-size: 2rem;
    margin-bottom: 20px;
  }
  .form-control, .btn 
  {
     height: 45px;
  }
  .form-group 
  {
    margin-bottom: 1rem;
  }
  </style>
 
</head>


<body>

<?php
session_start();
?>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
      <h1><a href="#body" class="scrollto"><font size="+3"><img src="./img/discussion.png" alt="">&nbsp;ConsultPro Consultancy</font></a></h1>        
      </div>
      <!-- Back Button -->
      <a href="candidate1.php" class="back-button">Back</a>
    </div>
  </header><!-- #header -->

    <!--==========================
      About Section
    ============================-->
    <div class="container mt-5">
        <div class="bg container1">
            <h1 class="text-center">Candidate Registration</h1>
            <form method="post" action="upresume.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="txtnm">Enter Your Name</label>
                    <input type="text" class="form-control" name="txtnm" id="txtnm" required>
                </div>
                <div class="form-group">
                    <label for="file">Upload Resume</label>
                    <input type="file" class="form-control-file" name="file" id="file" required>
                </div>
                <div class="text-center">
                    <input type="submit" name="upload" value="Upload" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

           <?php
		   
		  include("conn.php");


if(isset ($_POST["upload"])== "upload")
{
	$nm=$_POST["txtnm"];

  //file name with a random number so that similar donot get repalce
      $pname = rand(1000,1000). "-" . $_FILES["file"]["name"];
  
  //temporary file name to store file
      $tname = $_FILES["file"]["tmp_name"];

  //upload directory path
      $upload_dir = "upload/";

//To move the uploaded file to specific loaction
    move_uploaded_file($tname,$upload_dir.'/'.$pname);

    $q1= "INSERT INTO resume(name,upload) VALUES ('$nm', '$pname')";

    if($conn -> query($q1) === TRUE)
    {
    echo "File Upload successfully!!!!";
    /*header("Location:candidate.php");
    exit();*/
    }
    else
    {
      echo "Error";
    }

}
?>

		 

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
