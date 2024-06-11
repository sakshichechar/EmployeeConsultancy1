<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConsultPro Consultancy</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #header {
            /* background: #343a40; */
            padding: 15px 0;
        }
        #logo h1 a {
            color: #000;
            font-size: 1.5rem;
            text-decoration: none;
        }
        #logo img {
            height: 40px;
            margin-right: 10px;
        }
        .nav-menu a {
            color: #000;
            text-decoration: none;
            padding: 8px 12px;
            transition: 0.3s;
        }
        .nav-menu a:hover {
            /* background: #495057; */
            border-radius: 5px;
        }
        .nav-menu .active a {
            background: #007bff;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<header id="header">
    <div class="container d-flex align-items-center justify-content-between">

        <div id="logo">
            <h1><a href="#body"><img src="./img/discussion.png" alt="">&nbsp;ConsultPro Consultancy</a></h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu d-flex">
                <li><a href="newcompany1.php">View Company List</a></li>
                <li><a href="viewcompany.php">View all Company List</a></li>
                <li><a href="companyview.php">View Candidates</a></li>
                <li><a href="datejobview.php">View Job</a></li>
                <li><a href="paymentview.php">View Payment Details</a></li>
                <li><a href="view1.php">View Feedback</a></li>
                <li><a href="home.php">Back</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
