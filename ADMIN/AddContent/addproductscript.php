<?php
 
include('db.php');

if (isset($_POST['productIMG']) and isset($_POST['productName']) and isset($_POST['productPrice']) and isset($_POST['productSalePrice']) and isset($_POST['productDesc']) and isset($_POST['productRate']) and isset($_POST['productCateg'])){
	
// Assigning POST values to variables.
$productimg = $_POST['productIMG'];
$productname = $_POST['productName'];
$productprice = $_POST['productPrice'];
$productsaleprice = $_POST['productSalePrice'];
$productdesc = $_POST['productDesc'];
$productrate = $_POST['productRate'];
$productcateg = $_POST['productCateg'];

//$userid = $_SESSION['userid'];

$sql = "INSERT INTO products (image, name, price, sales_prices, description, star_rating, category) VALUES ('$productimg','$productname', '$productprice', '$productsaleprice', '$productdesc', '$productrate', '$productcateg')";

if (mysqli_query($con,$sql)) {
	echo '<script type="text/javascript">';
    echo 'alert("Product Added!");';
    echo 'document.location.href="http://localhost/Metashop/ADMIN/AddContent/addcontent.html";';
    echo '</script>';
//echo '<script>alert("Product Added!");</script>';
} else {
 echo "Error" . mysqli_error($con);
}

}
?>  

