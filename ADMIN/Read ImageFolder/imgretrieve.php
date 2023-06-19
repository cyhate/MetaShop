
<?php

include('db.php');

if (!empty($_GET['submit'])) {

$sql = "SELECT * from products";

if ($result=mysqli_query($con,$sql)) {
 while ($row=mysqli_fetch_row($result))
 {
 echo "<br> <img src=./image/$row[1] width='1000' height='600'>" ;
 }
 mysqli_free_result($result);
} 

} 
?>