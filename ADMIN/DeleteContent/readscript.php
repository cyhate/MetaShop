<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> MetaShop &copy;</title>
        <!-- Favicon-->
        <link rel="icon" href="http://localhost/MetaShop/Images/tablg.png" type="image/icon type">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    	

<?php 


include('nav.php');
include('search.php');

include('db.php');


if (!empty($_GET['submit'])) {
	


$sql ="SELECT * from products";

echo "<table>";
echo "<th>Product ID:</th>";
echo "<th>Product Name:</th>";
echo "<th>Product Price:</th>";
echo "<th>Product Sales Price:</th>";
echo "<th>Product Description:</th>";
echo "<th>Product Rating:</th>";
echo "<th>Product Category:</th>";


if ($result=mysqli_query($con,$sql)) {
 while ($row=mysqli_fetch_row($result))
 {
 echo "<tr><td>",$row[0], "</td><td>",$row[2], "</td><td>",$row[3], "</td><td>",$row[4], "</td><td>",$row[5], "</td><td>",$row[6], "</td><td>",$row[7], "</td></tr>";
 }
 echo "<table>";
 mysqli_free_result($result);
} 

} 
include('footer.php');
?>

