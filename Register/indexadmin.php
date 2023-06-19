<?php

// Initialize the session
session_start();

if($_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


// Check admin level

if($_SESSION["level"] == 0){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html>
<body>
    <div>
        <h2>Welcome admin, <br>userid <b><?php echo htmlspecialchars($_SESSION["userid"]); ?> </b> <br> username <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> <br>Welcome to our site.</h2>
    </div>
<p><a href="./logout.php">Logout</a></p>
</body>
</html>
