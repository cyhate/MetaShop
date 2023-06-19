<html>
<head>
		<meta charset="utf-8" />
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="style.css">
		<!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />


<title>Register Form®</title>

</head>
<body>
<?php
    include('../nav.php');
    include('../search.php');
    ?>


<b>MetaShop Team: ®</b>

<h6>Ιt would be our pleasure to become our member!</h6><br></br>
</br>
</br>
<div <div align="center">

<h3>REGISTER FORM®</h3><br></br>
    <form id="register-form" method="post" action="registerscript.php" >
        <table border="0.5" >
            <tr>
                <td><label for="user_id"><b><em>User Name:</em></b></label></td>
                <td><input type="text" class="form-control" name="user_id" id="user_id"></td>
            </tr>
			<br>
			</br>
            <tr>
                <td><label for="user_pass"><b><em>Password:</em></b></label></td>
                <td><input type="password" class="form-control" name="user_pass" id="user_pass"></input></td>
            </tr>
			</br>
			<tr>
                <td><label for="user_pass"><b><em>Country:</em></b></label></td>
                <td><input type="country" class="form-control" name="user_country" id="user_country"></input></td>
            </tr>
			<tr>
                <td><label for="user_pass"><b><em>Email:</em></b></label></td>
                <td><input type="email" class="form-control" name="user_email" id="user_email"></input></td>
            </tr>
			<tr>
                <td><label for="user_pass"><b><em>Telephone:</em></b></label></td>
                <td><input type="telephone" class="form-control" name="user_telephone" id="user_telephone"></input></td>
            </tr>
            <tr>
				
                <td><input type="submit" class="btn btn-primary" value="Register" />
                <td><input type="reset" class="btn btn-secondary" value="Reset"/>
				
            </tr>
        </table> 
    </form>
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
<?php
include('../footer.php');
?>