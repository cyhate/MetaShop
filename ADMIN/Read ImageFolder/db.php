<?php
// My first database connection, sports example

$con = mysqli_connect("localhost","testuser1","testuserpass1","website1");

if (mysqli_connect_errno())
	{
	echo "Failed";
	}
	else {
	echo "Success";
	}
?>