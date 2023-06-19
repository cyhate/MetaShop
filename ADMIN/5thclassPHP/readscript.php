<?php

// Initialize the session
session_start();

if($_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>



<?php 

include('db.php');


if (!empty($_GET['submit'])) {
	
$userid = $_SESSION['userid'];

echo $userid ;

$sql ="SELECT * from records WHERE userid = '$userid'";

echo "<table>";
echo "<th>Product ID</th>";
echo "<th>Product Name</th>";
echo "<th>Product Desc</th>";


if ($result=mysqli_query($con,$sql)) {
 while ($row=mysqli_fetch_row($result))
 {
 echo "<tr><td>", $row[0],"</td><td>",$row[2], "</td><td>",  $row[3], "</td></tr>";
 }
 echo "<table>";
 mysqli_free_result($result);
} 

} 

?>

<p><a href="./logout.php">Logout</a></p>
