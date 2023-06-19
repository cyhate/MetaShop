<?php

// Initialize the session
session_start();

if($_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html>
<body>
    <div>
        <h2>Hi user, <br>userid <b><?php echo htmlspecialchars($_SESSION["userid"]); ?> </b> <br> username <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> <br>Welcome to our site.</h2>
    </div>
	<p><a href="./addproduct.php">Add Product</a></p>
	
	
<form action="readscript.php" method="get">
<input type="submit" name="submit" id="submit" value="View Products">
</form>
	
	
<p><a href="./logout.php">Logout</a></p>

</body>
</html>
