


<?php
// My first database connection
$con = mysqli_connect("localhost","testuser1","testuserpass1","metashop");


if (mysqli_connect_errno())
	{
	echo "Failed";
	}
	else {
	echo "Success";
	}
?>
