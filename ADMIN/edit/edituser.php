<?php  
require('db.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass']) and isset($_POST['user_country']) and isset($_POST['user_email']) and isset($_POST['user_telephone']) and isset($_POST['user_level'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];
$country = $_POST['user_country'];
$email = $_POST['user_email'];
$telephone = $_POST['user_telephone'];
$level = $_POST['user_level'];


$sql = "UPDATE user_login SET username='$username', password='$password', country='$country', email='$email', telephone='$telephone', level='$level' WHERE userid LIKE '".$_POST["currentid"]."%' AND username LIKE '".$_POST["currentname"]."%' ";


//SET lastname='Doe' WHERE id=2";
//$sql = "SELECT * from products WHERE name LIKE '".$_GET["search"]."%' OR description LIKE '".$_GET["search"]."%'";
//$sql = "UPDATE user_login (username, password, country, email, telephone,level) VALUES ('$username', '$password', '$country', '$email', '$telephone',0)";


if (mysqli_query($con,$sql)) {
	echo '<script type="text/javascript">';
    echo 'alert("User Edited!");';
    echo 'document.location.href="http://localhost/Metashop/ADMIN/edit/edituser.html";';
    echo '</script>';
//echo '<script>alert("User registered!");</script>';
//Header('Location: http://localhost/Metashop/ADMIN/edit/edituser.html');
} else {
 echo "Error" . mysqli_error($con);
}

}
?>