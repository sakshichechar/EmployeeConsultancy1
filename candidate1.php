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
      padding: 20px 0;
  }
  .container1 
  {
      background-color: #f8f9fa;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 800px;
      margin: 0 auto;
  }
  h2 
  {
      color: #2e8bc0;
      margin-bottom: 20px;
      /* font-weight:bold; */
      text-shadow: 0.4rem 0.3rem 0px rgba(0, 0, 0, .2);
  }
  .form-group 
  {
    margin-bottom: 15px;
  }
  .form-group label
  {
      font-size:15px;
      font-weight:bold;
  }
  .btn 
  {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 4px;
  }

  .btn-primary 
  {
      background-color: #007bff;
      border: none;
  }
  .btn-primary:hover 
  {
      background-color: #0056b3;
  }

    .btn-secondary {
      background-color: #6c757d;
      border: none;
    }

    .btn-secondary:hover {
      background-color: #5a6268;
    }

    
</style>
 
</head>

<body>
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
      <h1><a href="#body" class="scrollto"><font size="+3"><img src="./img/discussion.png" alt="">&nbsp;ConsultPro Consultancy</font></a></h1>        
      </div>
      <!-- Back Button -->
      <a href="userhome.php" class="back-button">Back</a>
    </div>
  </header>

    <!--==========================
      About Section
    ============================-->
    <div class="bg">
    <section id="about">
      <div class="container1">
        <h2 class="text-center">Candidate Registration</h2>
        <form method="post" action="candidate.php" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="field1" class="col-sm-4 col-form-label"> Candidate Name: </label>
            <div class="col-sm-8">
              <input type="text" name="field1" id="field1" class="form-control" required />
            </div>
          </div>

          <div class="form-group row">
            <label for="field2" class="col-sm-4 col-form-label"> Candidate Contact No: </label>
            <div class="col-sm-8">
              <input type="text" name="field2" id="field2" class="form-control" maxlength="10" required />
            </div>
          </div>

          <div class="form-group row">
            <label for="field3" class="col-sm-4 col-form-label"> Candidate Address:</label>
            <div class="col-sm-8">
              <textarea name="field3" id="field3" class="form-control" required></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label for="field4" class="col-sm-4 col-form-label"> Candidate Email:</label>
            <div class="col-sm-8">
              <input type="email" name="field4" id="field4" class="form-control" required />
            </div>
          </div>

          <div class="form-group row">
            <label for="sel" class="col-sm-4 col-form-label"> Candidate Qualification:</label>
            <div class="col-sm-8">
              <select name="sel" id="sel" class="form-control" required>
                <option value="select">Select</option>
                <option value="BE">BE</option>
                <option value="MBA">MBA</option>
                <option value="MCA">MCA</option>
                <option value="M.tech">M.tech</option>
                <option value="B.tech">B.tech</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="field6" class="col-sm-4 col-form-label"> Candidate Extra Qualification:</label>
            <div class="col-sm-8">
              <textarea name="field6" id="field6" class="form-control" required></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label for="select" class="col-sm-4 col-form-label">Candidate Experience :</u></label>
            <div class="col-sm-8">
              <select name="select" id="select" class="form-control" required>
                <option value="none">Select</option>
                <option value="1 year">1 year</option>
                <option value="2 year">2 year</option>
                <option value="above 2 year">above 2 year</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="field8" class="col-sm-4 col-form-label"> Candidate Salary Expectation:</label>
            <div class="col-sm-8">
              <input type="text" name="field8" id="field8" class="form-control" required />
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-4 mb-3">
              <input type="submit" name="Submit" value="Submit" class="btn btn-primary" />
            </div>
            <div class="col-sm-4 mb-3">
              <input type="reset" name="reset" value="Cancel" class="btn btn-secondary" />
            </div>
            <div class="col-sm-4 mb-3">
              <a href="upresume1.php" class="btn btn-primary">Upload your resume here</a>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
          
          <?php
		  include("conn.php");


      $q="select ifnull(max(cid),0) from canreg";

      $res = $conn -> query($q);

if(isset($_POST['Submit'])=="Submit")
{

            $nm=$_POST["field1"];
            $address=$_POST["field3"];
            $cn=$_POST["field2"];
            $eml=$_POST["field4"];

            $quali=$_POST["sel"];
            $extra=$_POST["field6"];
            $exp=$_POST["select"];
            $sal=$_POST["field8"];

    $q1= "INSERT INTO canreg (name,Address,qualification,exp,mob,email,extra_qualify,salary) VALUES ('$nm','$address','$quali','$exp','$cn','$eml','$extra','$sal')";

      if($conn -> query($q1) === TRUE)
      {
      /*mysql_query($q1,$link)or die('failed to insert');*/

      echo "<script>alert('Record inserted')</script>";

     /* header("Location:candidate.php ");
      exit();*/
      }
      else
    {
        echo " Error inserting record: " . $conn -> error;
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
