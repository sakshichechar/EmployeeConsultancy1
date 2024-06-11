<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("conn.php");
$q1="select ifnull(max(id),0) from reg";
/*$res= mysql_query($q1);*/
$res = $conn -> query($q1);

/*$rows=mysql_fetch_row($res);
$row = $res -> fetch_assoc();

$id=$rows[0];
$id=$id+1;*/



/*$cnm=$_POST["field1"];
$cn=$_POST["field2"];
$email=$_POST["field3"];
$user=$_POST["field4"];
$pass=$_POST["field5"];*/

//insert
if(isset($_POST["Submit"])=="Submit")
{
    $cnm=$_POST["field1"];
    $cn=$_POST["field2"];
    $email=$_POST["field3"];
    $user=$_POST["field4"];
    $pass=$_POST["field5"];

    /*$q1="insert into reg values($id,'$cnm','$cn','$email','$user','$pass')";*/
    $q1= "INSERT INTO reg (cnm,cn,email,user,pass) VALUES ('$cnm', $cn, '$email', '$user', '$pass')";


    /*mysql_query($q1,$link)or die('failed to insert');*/
    if($conn -> query($q1) === TRUE)
    {
    echo "<script>alert('Record  inserted')</script>";
    
    header("Location:userlogin.php ? mode=save");
    exit();
    }
    else
    {
        echo " Error inserting record: " . $conn -> error;
    }

}
?>

</body>
</html>
