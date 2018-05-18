<?php 
$conn=mysqli_connect("localhost", "root", "", "user");
mysqli_query($conn ,"UPDATE details SET token = 'OFF' WHERE email = (SELECT emailid FROM logged) AND token = (SELECT token FROM logged)");
mysqli_query($conn ,"DELETE FROM logged WHERE emailid = (SELECT email FROM details WHERE token = 'OFF')");
echo "<script> window.location.assign('index.html'); </script>";
?>