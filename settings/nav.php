<?php
    include_once('functions.php'); //need functions to load prenav because BaseUrl function needs to be called
    
    ?> 
 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5"> 
                <a href="<?php echo getBaseUrl();?>/index.php"><img src="<?php echo getBaseUrl();?>/Images/metashoplogo.png"  style="margin-left: 0%"  width="110%" height="60"  title="source: imgur.com" alt="{{$lang.project_name}}" id="logo-changer" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    </br>
                    
						
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo getBaseUrl();?>/Home">Home</a></li>
						<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">Products</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>/motherboards">Motherboards</a></li>
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>/RAM">RAM</a></li>
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>/cases.html">Cases</a></li>
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>/CPU.html">CPU</a></li>
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>/gpu.html">GPU</a></li>
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>/power supply.html">PSU</a></li>
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>/ssd.html">Storage</a></li>
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>/cooler.html">Coolers</a></li>
                            </ul>
                        </li>
                    
                    <?php
                    //var_dump($_SESSION);
                        if (isset($_SESSION['loggedin']))
                    {
                
                        echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="';?><?php echo getBaseUrl();echo '/Register/logout">Logout</a></li>';
                        //we need to show the profile part because we are loggged in
                        echo '<style>
                        ul#profile-menu{display:flex;}
                        </style>';   
					
                    }
                    else
                    {
                        echo '<style>
                        ul#profile-menu{display:none;}
                        </style>';
                        echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="';?><?php echo getBaseUrl();echo '/Register/register">Register</a></li>';
                        echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="';?><?php echo getBaseUrl();echo '/Register/login">Login</a></li>';
                    }
                    ?>
                    </ul>
					</div>