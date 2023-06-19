<?php

// Initialize the session
session_start();

if($_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>



<html>
<h1>Welcome - Read From table</h1>
<form action="readscript.php" method="get">
<input type="submit" name="submit" id="submit">
</form>
</html>

