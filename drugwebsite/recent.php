<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>No More Drugs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
table {
    border-collapse: collapse;
    width: 80%;
}

table, td, th {
    border: 2px solid #888;
}

th {
    height: 50px;
}
td {
    height: 50px;
}
</style>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.html" id="logo"><img src="logo.png" alt="logo"></a>
			<ul>
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li class="current">
					<a href="recent.php">Recent Results</a>
				</li>
				<li>
					<a href="login.html">Log In</a>
				</li>
				<li>
					<a href="news.html">News &amp; Blog</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
<center>
      <h1><center>Past Results</center></h1><br><br>
<?php
$con=mysqli_connect("localhost", "root", "", "user");

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT * FROM webanlyze") or die (mysql_error ());

echo "<table>
<tr>
<th>Website</th>
<th>Maximum Score</th>
<th>Average Score</th>
<th>Total Score</th>
<th>Result</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['web'] . "</td>";
echo "<td>" . $row['max'] . "</td>";
echo "<td>" . $row['avg'] . "</td>";
echo "<td>" . $row['total'] . "</td>";
echo "<td>" . $row['result'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</center><br>
</div>
	<div id="footer">
		<div>
			<form action="index.html">
				<h2>Send A Message</h2>
				<label for="name"><span>Your Name:</span>
					<input type="text" id="name">
				</label>
				<label for="emailad"><span>Email Address:</span>
					<input type="text" id="emailad">
				</label>
				<label for="message"><span class="message">Message:</span>
					<textarea name="message" id="message" cols="30" rows="10"></textarea>
				</label>
				<input type="submit" class="send" value="Send">
			</form>
			<div>
				<h2>Contact Details</h2>
				<ul>
					<li>
						<b>Location</b>
						<span>:</span>
						<p>
							This is just a place holder, so you can see what the site would look like
						</p>
					</li>
					<li>
						<b>Phone</b>
						<span>:</span>
						<p>
							(+91) 9773025198;
						</p>
					</li>
					<li>
						<b>WebSite</b>
						<span>:</span>
						<p>
							<a href="jayantsingh.wordpress.com" class="email" target="_blank">jayantsingh.com</a>
						</p>
					</li>
					<li>
						<b>Social</b>
						<span>:</span>
						<div>
							<a href="" id="facebook" target="_blank">facebook</a>
							<a href="" id="twitter" target="_blank">twitter</a>
							<a href="" id="googleplus" target="_blank">google&#43;</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>

	
</html>