<html>
<head>
<h1>Search Result:</h1>
</head>
<body>




</body>

</html>

<?php

include('db.php');

if (!empty($_GET['submit'])) {


//$sql = "SELECT * from products_link WHERE description LIKE '".$_GET["search"]."%'";

$sql = "SELECT * from products WHERE name LIKE '".$_GET["search"]."%' OR description LIKE '".$_GET["search"]."%'";

//$sql = "SELECT * from product_images WHERE description LIKE '".$_GET["search"]."%'";



if ($result=mysqli_query($con,$sql)) {
 while ($row=mysqli_fetch_row($result))
 {
echo "<br>", $row[0] , " ", $row[1], " ", $row[2];
 
 //echo "<br> <img src=./product_images/$row[1]>";
 
 
//echo "<a href='$row[0]'></a>";


 
// window.open("http://localhost/MetaShop/AboutUs/AboutUs.html","_self");
 
 //<href="http://localhost/MetaShop/AboutUs/AboutUs.html">
 
 
 }
 mysqli_free_result($result);
} 



} else { }
?>