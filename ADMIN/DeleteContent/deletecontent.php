<?php  
include('db.php');


if (isset($_POST['productID'])){
	


$productid = $_POST['productID'];





$sql = "DELETE FROM products WHERE id=$productid";



if (mysqli_query($con,$sql)) {
	echo '<script type="text/javascript">';
    echo 'alert("Product Deleted!");';
    echo 'document.location.href="http://localhost/MetaShop/ADMIN/DeleteContent/deletecontent.html";';
    echo '</script>';

//echo "<script>window.location.href='http://localhost/MetaShop/ADMIN/DeleteContent/deletecontent.html';</script>";	
//echo '<script>alert("Product Deleted!");</script>';
//Header('Location: http://localhost/MetaShop/ADMIN/DeleteContent/deletecontent.html');
} else {
 echo "Error" . mysqli_error($con);
}

}

?>