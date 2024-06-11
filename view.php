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
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

   
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
  .feedback-section
  {
    padding: 40px 0;
  }
  .feedback-table
  {
    margin-top: 40px;
    width:100%;
    border-collapse: collapse;
  }
  .feedback-table th, .feedback-table td 
  {
    border: 1px solid #dee2e6;
    padding: 12px;
    text-align: center;
  }
  .feedback-table th 
  {
    background-color: #343a40;
    font-weight: bold;
    color:white;
  }

  .no-feedback 
  {
    text-align: center;
    color: red;
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
      <h1><a href="#body" style=" font-size:30px;"><img src="./img/discussion.png" alt="">&nbsp;ConsultPro Consultancy</a></h1>        
      </div>

      <!-- Back Button -->
      <a href="view1.php" class="back-button">Back</a>
    </div>
  </header>


<!--==========================
      About Section
============================-->
<section id="about" class="feedback-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="text-center" style="font-weight:bold; color: #2e8bc0;">View Feedback</h1>
                    <?php
                        include("conn.php");
                        $dt = $_POST["txtdt"];

                        $q = "select * from feedback where dates='$dt'";
                        $rs = $conn->query($q);

                        if ($rs->num_rows > 0) {
                            echo "<div class='table-responsive'>";
                            echo "<table class='table table-bordered feedback-table'>";
                            echo "<thead class='thead-dark'>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>Feedback</th>
                                    </tr>
                                  </thead>";
                            echo "<tbody>";
                            while ($row = $rs->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['dates']}</td>
                                        <td>{$row['stud_name']}</td>
                                        <td>{$row['stud_mob']}</td>
                                        <td>{$row['stud_email']}</td>
                                        <td>{$row['stud_feedback']}</td>
                                      </tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";
                        } else {
                            echo "<div class='no-feedback'>There is no feedback</div>";
                        }
                    ?>
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
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
