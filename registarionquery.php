<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

include("conn.php");

$q1="select ifnull(max(cid),0) from companyreg";

$res = $conn -> query($q1);

/*$res= mysql_query($q1);
$rows=mysql_fetch_row($res);
$id=$rows[0];
$id=$id+1;*/

if(isset($_POST["Submit"])=="Submit")
{

        $cnm=$_POST["field1"];
        $cperson=$_POST["field2"];
        $mob=$_POST["field3"];
        $tele=$_POST["field4"];
        $email=$_POST["field5"];
        $add=$_POST["field6"];
        $typecmp=$_POST["select"];
        $skill=$_POST["field8"];

   //insert

       /* $q1="insert into companyreg values($id,'$cnm','$cperson','$mob','$tele','$email','$add','$typecmp','$skill')";*/
       $q1= "INSERT INTO companyreg (cmp_name,cmp_mob,cmp_email,cmp_type,cmp_person,cmp_telno,cmp_add,cmp_skill) VALUES ('$cnm', $mob, '$email', '$typecmp', '$cperson','$tele','$add','$skill')";

        if($conn -> query($q1) === TRUE)
        {
            /*mysql_query($q1,$link)or die('failed to insert');*/

            echo "<script>alert('Record insertes')</script>";

            header("Location:home.php ? mode=save");
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
