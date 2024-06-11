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
    $nm=$_POST["field1"];
    $con=$_POST["field2"];
    $email=$_POST["field3"];

    $feed=$_POST["field5"];
    $dt = date('Y-m-d');

    //$dt=$_POST['field4'];
    //insert

    $q1= "INSERT INTO feedback (stud_name,stud_mob,stud_email,stud_feedback,dates) VALUES ('$nm', $con, '$email', '$feed','$dt')";

    if($conn -> query($q1) === TRUE)
    {
        echo "<script>alert('Feedback insertes')</script>";
        header ('Location: index.html');
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
