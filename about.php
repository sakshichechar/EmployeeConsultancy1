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
    img {
      width: 50px;
    }

    .bg-color {
      padding: 30px 0; /* Padding to give some space around the content */
    }

    .bg-color .container 
    {
      background-color: #ffffff; /* White background for the content area */
      padding: 20px; /* Padding inside the content area */
      border-radius: 10px; /* Rounded corners for the content area */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for a raised effect */
    }

    .box {
      background-color: #e6e6fa !important; /* Light lavender background for the content boxes */
      padding: 30px;
      box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
      text-align: center; /* Center-align text for better aesthetics */
      transition: all 0.3s ease-in-out;
      border-radius: 8px;
    }

    .box:hover {
      box-shadow: 0px 0 45px rgba(0, 0, 0, 0.15);
    }

    .box .icons i 
    {
      display:flex;
      font-size: 35px;
      font-weight:bold;
      /* margin-bottom: 10px; */
      color: #007bff; /* Primary color for icons with important */
    }

    .title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 15px;
      color: #333; /* Dark color for titles */
    }

    .description {
      font-size: 14px;
      color: #666;
      line-height: 24px;
    }

    .wow {
      visibility: hidden;
    }

    .wow.fadeInLeft {
      animation-name: fadeInLeft;
    }

    .wow.fadeInRight {
      animation-name: fadeInRight;
    }

    @keyframes fadeInLeft {
      from {
        opacity: 0;
        transform: translate3d(-100%, 0, 0);
      }
      to {
        opacity: 1;
        transform: none;
      }
    }

    @keyframes fadeInRight {
      from {
        opacity: 0;
        transform: translate3d(100%, 0, 0);
      }
      to {
        opacity: 1;
        transform: none;
      }
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
  <section id="services" class="bg-color">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="box wow fadeInLeft">
            <div class="icons"><i class="fa fa-users"></i></div>
            <h4 class="title"><a href="">Our Mission</a></h4>
            <p class="description">Our mission is to provide top-notch consultancy services to help organizations optimize their human resource management, ensuring they can attract, retain, and develop the best talent in the industry.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="box wow fadeInRight">
            <div class="icons"><i class="fa fa-briefcase"></i></div>
            <h4 class="title"><a href="">Our Services</a></h4>
            <p class="description">We offer a wide range of services including talent acquisition, employee training and development, performance management, and HR consulting to meet the unique needs of each client.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="box wow fadeInLeft" data-wow-delay="0.2s">
            <div class="icons"><i class="fa fa-chart-line"></i></div>
            <h4 class="title"><a href="">Our Approach</a></h4>
            <p class="description">Our approach is centered on understanding our clients' business goals and challenges. We leverage our expertise and industry best practices.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="box wow fadeInRight" data-wow-delay="0.2s">
            <div class="icons"><i class="fa fa-globe"></i></div>
            <h4 class="title"><a href="">Our Reach</a></h4>
            <p class="description">We serve clients across various industries and geographies, providing insightful and impactful consultancy services wherever they are located.</p>        
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

</body>
</html>
