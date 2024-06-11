<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("conn.php");
/*$unm=$_POST["field1"];
$pwd=$_POST["field2"];*/

if (isset($_POST["Submit"])=="Submit")
{
	$unm=$_POST["field1"];
	$pwd=$_POST["field2"];

$q="select * from reg where user='$unm'";

/*$res=mysql_query($q,$link);*/
$result = $conn -> query($q);

$rows=$result -> fetch_assoc();

$um=$rows['user'];
$pwd1=$rows['pass'];



	if($pwd==$pwd1 && $unm==$um)
	{
		echo "<script>alert('Login successfuly')</script>";
		header('Location:userhome.php');
		
	}

	else
	{
		header('Location:userlogin.php ?idd=loginfail');
	/*echo "<script>alert('Login unsuccessfuly')</script>";*/
	//echo "Login Failed..";
	}
	
	
}
?>
</body>
</html>
