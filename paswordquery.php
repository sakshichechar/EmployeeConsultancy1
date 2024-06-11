<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>

<?php

include("conn.php");

if(isset($_POST["Submit"])) // Corrected form submission check
{
    $password = $_POST["field1"];
    $newpassword = $_POST["field2"];
    $conpassword = $_POST["field4"];

    // Check if the new password and confirm password match
    if ($newpassword !== $conpassword) {
        echo "<script>alert('New password and confirm password do not match');</script>";
    } else {
        // Using prepared statements for security
        $stmt = $conn->prepare("UPDATE reg SET pass = ? WHERE pass = ?");
        $stmt->bind_param("ss", $newpassword, $password);

        if ($stmt->execute()) 
		{
            echo "<script>alert('Password Updated');</script>";
            header("Location: password.php");
            exit();
        } 
		else 
		{
            echo "<script>alert('Failed to update password');</script>";
        }

        $stmt->close();
    }

}

?>
</body>
</html>
