<?php require '../db.php'; 

function showCompList($email) {
	$e = $email;
	$sql = "select owneremail, createddate, duedate, message from todos where email = '$e' and isdone = 1 order by id";
	$results = runQuery($sql);
}

function showIncompList($email) {
	$e = $email;
	$sql = "select owneremail, createddate, duedate, message from todos where email = '$e' and isdone = 0 order by id";
	$results = runQuery($sql);
}














?>