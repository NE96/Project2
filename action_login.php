<?php
require 'db.php';

$email = $_POST['email'];

$password = $_POST['password'];

$sql = "select * from accounts where email ='$email' and password ='$password'";

$results = runQuery($sql);

if(count($results) > 0)
{
	$fname = $results[0]['fname'];
	$lname = $results[0]['lname'];
	header("Location: welcome.php?fname=$fname&lname=$lname");
}

else{
	header("Location: error.php");
}

?>
