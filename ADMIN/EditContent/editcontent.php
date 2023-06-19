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



$sql = "UPDATE products SET image='$productimg', name='$productname', price='$productprice', sales_prices='$productsaleprice', description='$productdesc', star_rating='$productrate', category='$productcateg' WHERE id LIKE '".$_POST["currentid"]."%' AND name LIKE '".$_POST["currentname"]."%' ";


if (mysqli_query($con,$sql)) {
	echo '<script type="text/javascript">';
    echo 'alert("Product Edited!");';
    echo 'document.location.href="http://localhost/MetaShop/ADMIN/DeleteContent/deletecontent.html";';
    echo '</script>';
//echo '<script>alert("Product Added!");</script>';
} else {
 echo "Error" . mysqli_error($con);
}

}
?>  