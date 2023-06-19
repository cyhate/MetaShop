<?php  
include('db.php');


if (isset($_POST['deleteuser_id'])){
	

$deleteuserid = $_POST['deleteuser_id'];



$sql = "DELETE FROM user_login WHERE userid=$deleteuserid";



if (mysqli_query($con,$sql)) {
	echo '<script type="text/javascript">';
    echo 'alert("User Deleted!");';
    echo 'document.location.href="http://localhost/Metashop/ADMIN/delete/deleteuser.html";';
    echo '</script>';

//echo "<script>window.location.href='http://localhost/MetaShop/ADMIN/DeleteContent/deletecontent.html';</script>";	
//echo '<script>alert("Product Deleted!");</script>';
//Header('Location: http://localhost/MetaShop/ADMIN/DeleteContent/deletecontent.html');
} else {
 echo "Error" . mysqli_error($con);
}

}

?>