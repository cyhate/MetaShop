<?php

include('db.php');

if (!empty($_GET['submit'])) {

$sql = "SELECT * from adminaddimage";

if ($result=mysqli_query($con,$sql)) {
 while ($row=mysqli_fetch_row($result))
 {
 echo "<br> <img src=./images/$row[1] >" ;
 }
 mysqli_free_result($result);
} 

} 
?>



