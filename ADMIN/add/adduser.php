<?php  
//require('../includes/db.php');
include('db.php');
//require('db.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass']) and isset($_POST['user_country']) and isset($_POST['user_email']) and isset($_POST['user_telephone']) and isset($_POST['user_level'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];
$encrypted_password = md5($_POST['user_pass']);
$country = $_POST['user_country'];
$email = $_POST['user_email'];
$telephone = $_POST['user_telephone'];
$level = $_POST['user_level'];


$sql = "INSERT INTO user_login (username, password, country, email, telephone, level) VALUES ('$username', '$encrypted_password', '$country', '$email', '$telephone', '$level')";

if (mysqli_query($con,$sql)) {
	echo '<script type="text/javascript">';
    echo 'alert("User Registered!");';
    echo 'document.location.href="http://localhost/Metashop/ADMIN/add/adduser.html";';
    echo '</script>';
//echo '<script>alert("User registered!");</script>';
//Header('Location: login.php');
} else {
 echo "Error" . mysqli_error($con);
}

}
?>




<!---?php  
/**include('db.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass']) and isset($_POST['user_country']) and isset($_POST['user_email']) and isset($_POST['user_telephone'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];
$encrypted_password = md5($_POST['user_pass']);
$country = $_POST['user_country'];
$email = $_POST['user_email'];
$telephone = $_POST['user_telephone'];


$sql = "INSERT INTO user_login (username, password, country, email, telephone, level) VALUES ('$username', '$encrypted_password', '$country', '$email', '$telephone',0)";

if (mysqli_query($con,$sql)) {
	echo '<script type="text/javascript">';
    echo 'alert("User registered!");';
    echo 'document.location.href="http://localhost/Metashop/ADMIN/add/adduser.html";';
    echo '</script>';
//echo '<script>alert("User registered!");</script>';
//Header('Location: http://localhost/Metashop/ADMIN/add/adduser.html');
} else {
 echo "Error" . mysqli_error($con);
}

}
?>