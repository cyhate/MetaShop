<?php

include('db.php');

if (!empty($_GET['submit'])) {

// '".$GET["sid"]."'

$sql = "INSERT INTO adminaddimage (imgPATH, imgDESC) VALUES ('".$_GET["imgFILE"]."', '".$_GET["imgDESC"]."')";

if (mysqli_query($con,$sql)) {
 echo "<br> New record saved!";
} else {
 echo "Error";
}


} else { }
?>

