<?php

$email=$_POST["email"];
$pass=$_POST["pass"];
$con = new mysqli('localhost', 'root', '', 'login');
$sql="INSERT INTO login_details (email , pass)
VALUES('$email', '$pass')";
if (mysqli_query($con,$sql))
 {
    echo "sucess";
} else {
    echo "failed";
}
?>
