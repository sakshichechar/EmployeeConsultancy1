<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

include("conn.php");



if(isset($_POST["Submit"])=="Submit")
{
  $unm=$_POST["field1"];
  $pass=$_POST["field2"];

$q="select * from admin where nm ='$unm'  ";

$result = $conn -> query($q);


$row = $result -> fetch_assoc();

$nm=$row['nm'];    //table column name "nm and pwd"

$pwd=$row['pwd'];


if($unm==$nm && $pass==$pwd)
 {
   echo"<script>alert('login successfully')</script>";
   header ('Location: home.php');
        exit();
  }
  /*else
  {
    /*echo"<script>alert('failed to login')</script>";
	header('Location:login.php ?idd=loginfail');
	}*/
}
?>
</body>
</html>
