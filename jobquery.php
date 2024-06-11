<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("conn.php");



/*$cnm=$_POST["field1"];
$req=$_POST["field2"];
$vacancy=$_POST["field4"];
$sal=$_POST["field3"];
$dt=date("Y-m-d");*/

//insert

if(isset($_POST["Submit"])=="Submit")
{
    $cnm=$_POST["field1"];
    $req=$_POST["field2"];
    $vacancy=$_POST["field4"];
    $sal=$_POST["field3"];
    $dt = date('Y-m-d');

    //$dt=$_POST["field5"];


                //insert sql query 

                /*$q1="insert into job values('$dt','$cnm','$req','$vacancy','$sal')";*/
                $q1= "INSERT INTO job (job_name,job_req,job_vac,salary,dates) VALUES ('$cnm', '$req', '$vacancy', '$sal','$dt')";


            if($conn -> query($q1) === TRUE)
            {

            /*mysql_query($q1,$link)or die('failed to insert');*/

            echo "<script>alert('details insertes')</script>";

            header("Location:home.php ? mode=save");
            }
            else
            {
                echo " Error inserting record: " . $conn -> error;
            }
 }
?>

</body>
</html>
