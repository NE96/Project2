<!DOCTYPE html>

<html>

<head>
	<title>Account Made</title>
</head>

<body>

<h1 align="middle">
	<?php
		echo "Account Registration Successful!<br/>";
		echo "Welcome ".$_GET['fname']." ". $_GET['lname'];
	?>
</h1>

<div>
	<h2 align="middle"><a href="LoginPage.php">Return to Log In page</a></h2>
</div>

</body>

</html>