<?php 

require 'todofunctions.php';

$results1 = showIncompList($email);

if(count($results1) > 0)
{
	echo "<table border=\"1\"><tr><th>ID</th><th>Email</th><th>Date Created</th><th>Date Due</th><th>Message</th></tr>";
	foreach ($results as $row) {
		echo "<tr><td>".$row["owneremail"]."</td><td>".$row["createddate"]."</td><td>".$row["duedate"]."</td><td>"
		.$row["message"]."</td></tr>";
	}
	
}







?>