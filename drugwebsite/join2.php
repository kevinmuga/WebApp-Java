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

$sql = "INSERT INTO webanlyze(web) VALUES ('".$_POST["web"]."')";

if (mysqli_query($conn ,$sql)) {
	echo "New records created successfully";
	mysqli_query($conn ,"ALTER TABLE `log1` ADD newq varchar(30) NOT NULL");
    echo "<script> window.location.assign('web.php'); </script>";
} else {
	echo "records";
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>