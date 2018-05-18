<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>No More Drugs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.html" id="logo"><img src="logo.png" alt="logo"></a>
			<ul>
				<li>
					<a href="pro_index.html">Home</a>
				</li>
				<li>
					<a href="pro_about.html">About</a>
				</li>
				<li class="current">
					<a href="web.html">Web Analyzer</a>
				</li>
				<li>
					<a href="profile.php">Profile</a>
				</li>
				<li>
					<a href="pro_news.html">News &amp; Blog</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
<center>
      <h1><center>ENTER URL</center></h1>
      <form method="post" action= "join2.php" onsubmit="return ValidateForm(this);">
	  <table border="0" cellpadding="5" cellspacing="0" width="600">
		<tr><td><b>Website*:</b></td>
		<td>
        <input id="web" name="web" type="text" maxlength="60" style="width:600px; height: 2em; border:1px solid #999999;" required/>
        </td>
		</tr>
		</table><br>
        <br><center>
		<button class="button"><span>SUBMIT</span></button>
<button class="button"><span>TEST</span></button></center>
</form>
</center>
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