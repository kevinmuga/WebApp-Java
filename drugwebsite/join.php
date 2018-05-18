<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: ");
} 

$sql = "INSERT INTO details( fname,lname,org,email,password,phone,adrr) VALUES ('".$_POST["FirstName"]."', '".$_POST["LastName"]."','".$_POST["Organization"]."','".$_POST["FromEmailAddress"]."','".$_POST["password"]."','".$_POST["CellPhone"]."','".$_POST["StreetAddress1"]."')";

if (mysqli_query($conn ,$sql)) {
	echo "New records created successfully";
    echo "<script> window.location.assign('login.html'); </script>";
} else {
	echo "records";
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>