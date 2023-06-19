
<html>
<head>
		<!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />

<title>Login Form® </title>



</head>
<body>
<?php
    include('../nav.php');
    include('../search.php');
    ?>
<b>MetaShop Team: ®</b>
<h6>Welcome!</h6><br></br>
</br>
</br>


<div align="center">

<h3>LOGIN FORM®</h3>
</br>
</br>
</br>
</br>
</br>
<div class="form-group">
    <form id="login-form" method="post" action="loginscript.php" >
        <table>
            <tr>
                <td><label for="user_id"><b><em>User Name:</em></b></label></td>
                <td><input type="text" class="form-control" name="user_id" id="user_id"></td>
            </tr>
            <tr>
                <td><label for="user_pass"><b><em>Password:</em></b></label></td>
                <td><input type="password" class="form-control" name="user_pass" id="user_pass"></input></td>
            </tr>
            <tr>
                <td><input style="margin-left:00px;"  type="submit" class="btn btn-primary" value="Login" /></td>
                <td><input style="margin-left:140px;" type="reset" class="btn btn-secondary" value="Reset"/></td>
            </tr>
			<tr>
			<td><input class="form-check-label" style="margin-left:90px;" type="checkbox" class="form-check-input" name="rememberusername" id="rememberusername" value="1" /></td>
			<td><label style="margin-left:20px;" for="rememberusername"><em>Remember Me</em></label> </td>
			</tr>
        </table>
    </form>
</div>
</div>
<br>
<br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<?php
include('../footer.php');
?>