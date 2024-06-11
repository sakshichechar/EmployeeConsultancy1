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
      /* background-color: #f8f9fa; */
      padding: 50px 0;
    }

    .container1 
    {
      background-color: #f8f9fa;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 800px;
      margin: 0 auto;
    }

    .form-style-1 {
      list-style: none;
      padding: 0;
    }

    .form-style-1 li {
      margin-bottom: 15px;
    }

    .form-style-1 input[type="text"],
    .form-style-1 input[type="date"],
    .form-style-1 select {
      border: 1px solid #ccc;
      padding: 10px;
      font-size: 16px;
      width: 100%;
      border-radius: 4px;
    }

    .form-style-1 input[type="submit"] {
      background-color: #007bff;
      border: none;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    .form-style-1 input[type="submit"]:hover {
      background-color: #0056b3;
    }

</style>
</head>

<body>
<!--============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
      <h1><a href="#body" class="scrollto"><font size="+3"><img src="./img/discussion.png" alt="">&nbsp;ConsultPro Consultancy</font></a></h1>        
      </div>

      <!-- Back Button -->
      <a href="viewpanal.php" class="back-button">Back</a>
    </div>
  </header>


    <!--==========================
      About Section
    ============================-->
    <div class="bg">
    <section id="about">
      <div class="container1">
        <h1 class="text-center">View Company Details</h1>
        <form name="frm" id="frm" method="post" action="query1.php">
          <div class="form-group row">
            <label for="sell" class="col-sm-4 col-form-label" style="font-size: 1.2em;">Choose Company Type</label>
            <div class="col-sm-8">
              <?php
                include("conn.php");

                $q = "SELECT DISTINCT cmp_type FROM companyreg";
                $rs = $conn->query($q);

                if ($rs->num_rows > 0) {
                  echo '<select name="sell" id="sell" class="form-control" style="font-size: 1em;">';
                  while ($row = $rs->fetch_assoc()) {
                    echo '<option value="'.$row['cmp_type'].'">'.$row['cmp_type'].'</option>';
                  }
                  echo '</select>';
                }
              ?>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-6 text-right">
              <input type="submit" name="view" class="btn btn-primary" value="View">
            </div>
            <div class="col-sm-6 text-left">
              <input type="reset" name="reset" class="btn btn-secondary" value="Reset">
            </div>
          </div>
        </form>
      </div>
    </section>
  </div><!-- #about -->

    
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
