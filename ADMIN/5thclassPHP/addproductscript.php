<?php

// Initialize the session
session_start();

if($_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
require('db.php');

if (isset($_POST['productName']) and isset($_POST['productDesc'])){
	
// Assigning POST values to variables.
$productname = $_POST['productName'];
$productdesc = $_POST['productDesc'];
$userid = $_SESSION['userid'];

$sql = "INSERT INTO records (userid, productname, productdescription) VALUES ('$userid', '$productname','$productdesc')";

if (mysqli_query($con,$sql)) {
echo '<script>alert("Product Added!");</script>';
} else {
 echo "Error" . mysqli_error($con);
}

}
?>