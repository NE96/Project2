<?php
require 'db.php';

$fname = $_POST["fname"];

$lname = $_POST["lname"];

$email = $_POST["email"];

$bdate = $_POST["birthday"];

$telnum = $_POST["phone"];

$gen = $_POST["gender"];

$pass = $_POST["password"];

$sql = "select * from accounts where email = '$email'";
$results = runQuery($sql);

if(count($results) > 0)
{
	header("Location: exists.php");
}

else{
$sql = "insert into accounts (email, fname, lname, phone, birthday, gender, password) values ('$email', '$fname', 
	'$lname', '$telnum', '$bdate', '$gen', '$pass')";
$results = runQuery($sql);

header("Location: welcome.php?$fname=$fname&$lname=$lname");
}

?>