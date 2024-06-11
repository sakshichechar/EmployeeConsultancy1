<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("conn.php");



/*$name=$_POST["field1"];
$dt=$_POST['field3'];
$total=$_POST["field4"];*/


//insert
if(isset($_POST["Submit"])=="Submit")
{

    $name=$_POST["field1"];
    //$dt=$_POST['field3'];
    $dt = date('Y-m-d');
    $total=$_POST["field4"];

            /*$q1="insert into payment values('$name','$dt',$total)";*/
            $q1= "INSERT INTO payment (name,dates,total_pay) VALUES ('$name','$dt','$total')";

            if($conn -> query($q1) === TRUE)
            {
            /*mysql_query($q1,$link)or die('failed to insert');*/
            echo "<script>alert('details inserted')</script>";

            header("Location:payment.php ? mode=save");
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
