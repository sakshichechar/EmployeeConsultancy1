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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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
  #about 
  {
    padding: 60px 0;
    /* background-color: #e9ecef; Slightly darker than #f8f9fa */
  }
  .about-title 
  {
    font-size: 2.5em;
    margin-bottom: 60px;
    text-align: center;
    font-weight:bold;
  }
  .about-table 
  {
    width: 120%;
    border-collapse: collapse;
  }
  .about-table th, .about-table td 
  {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
  }
  .about-table th 
  {
    background-color: #343a40;
    color: black;
    font-size: 1.1em; /* Increased font size */
  }
  .about-table tr:nth-child(even) 
  {
    background-color: #f2f2f2;
  }
  .about-table tr:hover 
  {
    background-color: #ddd;
  }
  @media (max-width: 768px) 
  {
    .about-title 
    {
      font-size: 1.5em;
    }
    .about-table th, .about-table td 
    {
      font-size: 0.9em;
    }
  }
</style>
</head>

<body>
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
      <h1><a href="#body" class="scrollto"><font size="+3"><img src="./img/discussion.png" alt="">&nbsp;ConsultPro Consultancy</font></a></h1>        
      </div>
       <!-- Back Button -->
       <a href="newcompany.php" class="back-button">Back</a>
    </div>
</header>

    <!--==========================
      About Section
    ============================-->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="about-title">View Company Details</h1>
                <div class="table-responsive">
                    <table class="table table-bordered about-table">
                        <thead>
                            <tr class="success">
                                <th>Company Id</th>
                                <th>Company Name</th>
                                <th>Contact Person</th>
                                <th>Contact No</th>
                                <th>Telephone No</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Type of Company</th>
                                <th>Required Skills</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("conn.php");
                            $sel1 = $_POST["sell"];

                            if (isset($_POST["view"]) == "view") {
                                $q = "SELECT * FROM companyreg WHERE cmp_type = '$sel1'";
                                $rs = $conn->query($q);

                                if ($rs->num_rows > 0) {
                                    while ($row = $rs->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>".$row['cmp_id']."</td>";
                                        echo "<td>".$row['cmp_name']."</td>";
                                        echo "<td>".$row['cmp_person']."</td>";
                                        echo "<td>".$row['cmp_mob']."</td>";
                                        echo "<td>".$row['cmp_telno']."</td>";
                                        echo "<td>".$row['cmp_email']."</td>";
                                        echo "<td>".$row['cmp_add']."</td>";
                                        echo "<td>".$row['cmp_type']."</td>";
                                        echo "<td>".$row['cmp_skill']."</td>";
                                        echo "</tr>";
                                    }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
