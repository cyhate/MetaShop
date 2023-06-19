<?php
include('profile.php ');
?>


<!-- Search-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<form class="example" action="searchscript.php" method="get" style="margin:left;" >
			<input type="search" placeholder="Search..." name="search" id="search">
			<button type="submit" name="submit" id="submit" value="read"><i class="fa fa-search"></i></button>
			</form>
			</div>
			<!-- Profile-->
            <ul id="profile-menu" class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
			<img src="<?php echo getBaseUrl();?>/Images/avatar.jpg" style="margin-left:65%"  width="3%" height="3%">
            <form class="d-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true"><?php echo $_SESSION['username'];?></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li> <i  me-1"style="margin-left:5%"><a class="dropdown-item" href="<?php echo getBaseUrl();?>/cart.html">Profile</a></li></i> 
                        <li><a class="dropdown-item" href="http://localhost/MetaShop/settings/account_settings.html"<?php echo getBaseUrl();?>/account_settings">Account Settings</a></li>                              
                    </ul>
                </li>
            </form>
			</ul>
        </nav>

