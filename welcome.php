<!DOCTYPE html>

<html>

<head>
	<title><?php echo "Welcome ".$_GET['fname']." ". $_GET['lname'];?></title>
</head>

<body>

<h1 align="middle">
	<?php
		$email = $_GET['email'];
		echo "Login Successful!<br/>";
		echo "Welcome ".$_GET['fname']." ". $_GET['lname'];
	?>
</h1>

<?php include 'list.php';?>


<div>
	<h2 align="middle"><a href="LoginPage.php">Return to Log In page</a></h2>
</div>

</body>

</html>