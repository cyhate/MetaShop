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

//$sql = "SELECT * from product_images WHERE description LIKE '".$_GET["search"]."%'";
//$sql = "SELECT * from products_link WHERE description LIKE '".$_GET["search"]."%'";

$sql = "SELECT * from products WHERE name LIKE '".$_GET["search"]."%' OR description LIKE '".$_GET["search"]."%'";


echo "<table>";
echo "<th>Image:</th>";
echo "<th>Product:</th>";
echo "<th>Price:</th>";
echo "<th>Sale Price:</th>";
echo "<th>Description:</th>";
echo "<th>Rate Stars:</th>";
echo "<th>Category:</th>";


if ($result=mysqli_query($con,$sql)) {
 while ($row=mysqli_fetch_row($result))
 {
 echo "<tr><td>",  '<img src="data:image/png;base64,'.base64_encode($row[1]).'"/>' , " ", "</td><td>",$row[2], "</td><td>",$row[3], "</td><td>",$row[4], "</td><td>",$row[5], "</td><td>",$row[6], "</td><td>",$row[7], "</td></tr>";



//'<img src="./image/$row[1]>'
//<img src="image/shop/product.jpg" alt="" />
//'<img src="data:image/png;base64,'.base64_encode($row[1]).'"/>'
//<img src="data:image/jpg;base64,apex_web_service.blob2clobbase64(h)"/>
//echo "<br> <img src=./images/$row[2] width='1000' height='600'>" ;
//echo "<br> <img src=./product_images/$row[1]>";
//echo "<a href='$row[0]'></a>";
// window.open("http://localhost/MetaShop/AboutUs/AboutUs.html","_self");
//<href="http://localhost/MetaShop/AboutUs/AboutUs.html">
//echo "<br>", " ", $row[1], " ", $row[2], " ", $row[3], " ", $row[4], " ", $row[5], " ", $row[6], " ", $row[7];
 }
 echo "<table>";
 echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
 
 mysqli_free_result($result);
 //echo '<script>alert("Product Added!");</script>';
} 

} else { }

include('footer.php');
?>
