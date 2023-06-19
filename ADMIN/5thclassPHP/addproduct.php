<?php

// Initialize the session
session_start();

if($_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>



<html>
<head>

</head>
<body>
<div <div align="center">

<h3>ADD product</h3>
    <form id="login-form" method="post" action="addproductscript.php" >
        <table border="0.5" >
            <tr>
                <td><label for="productName">Product Name</label></td>
                <td><input type="text" name="productName" id="productName"></td>
            </tr>
            <tr>
                <td><label for="productDesc">Product Descr</label></td>
                <td><input type="text" name="productDesc" id="productDesc"></input></td>
            </tr>
			
            <tr>
				
                <td><input type="submit" value="Add" />
                <td><input type="reset" value="Reset"/>
				
            </tr>
        </table>
    </form>
		</div>
</body>
</html>