<?php 

$username=$_POST['FromEmailAddress'];
$password=$_POST['password'];

$username=stripcslashes($username);
$password=stripcslashes($password);

$conn=mysqli_connect("localhost", "root", "", "user");

$username=mysqli_real_escape_string($conn,$_POST['FromEmailAddress']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

$result=mysqli_query($conn,"select * from details where email='$username' or password='$password'")
		or die("failed to query databse".mysqli_error($conn));


$row=mysqli_fetch_array($result);
if($row['email']== $username && $row['password']== $password)
{
  echo "login successful";
  $num = rand(2, 99999);
  mysqli_query($conn ,"UPDATE details SET token = '$num' WHERE email ='$username'");
  mysqli_query($conn ,"INSERT INTO log1(email) VALUES ('".$_POST['FromEmailAddress']."')");
  $sql = "INSERT INTO logged(emailid, token) VALUES ('".$_POST['FromEmailAddress']."', '".$num."')";
  session_start();

	if (mysqli_query($conn ,$sql)) {
		echo "New records created successfully";
	} else {
		echo "records";
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
    echo "<script> window.location.assign('profile.php'); </script>";
}
else
{
  echo"you are not registerd";
  echo "<script> window.location.assign('login.html'); </script>";
}
	?>