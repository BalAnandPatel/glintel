
<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right dk">
                        <ul class="nav nav-pills">
                        <li><a href=""></i><font color="red">Inquiry</font></a></li>
                        <li><a href=""><font color="blue">+91-9984087027, +91-8175087027</font></a></li>

                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                          
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
        
 
 
 
 
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
                
     
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                    	<h1><img id="homelogo" src="images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php"> <i class="fa fa-home" aria-hidden="true" style="color:#3498db"></i> Home</a></li>
                        <li><a href="aboutus.php ">About Us</a></li>					

                        <li class="dropdown"><a href="services.php">Services <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                               <li><a href="web-design.php"><i class="fa fa-steam" aria-hidden="true" style="color:#3498db"></i> Website Design</a></li>
                                <li><a href="marketing.php"> <i class="fa fa-sitemap" aria-hidden="true" style="color:#34495e"></i> Network Marketing</a></li>
                                <li><a href="ims.php"> <i class="fa fa-floppy-o" aria-hidden="true" style="color:#c0392b"></i> Desktop Application</a></li>
                                <li><a href="mobile.php"> <i class="fa fa-mobile" aria-hidden="true" style="color:#27ae60"></i>  Mobile Application</a></li>
                                <li><a href="seo.php"> <i class="fa fa-search" aria-hidden="true" style="color:#f1c40f"></i> SEO</a></li> 
                                <li><a href="logo-design.php"> <i class="fa fa-slack" aria-hidden="true" style="color:#8e44ad"></i> Logo Design</a></li>
                                <li><a href="maintain.php"> <i class="fa fa-recycle" aria-hidden="true" style="color:#1abc9c"></i> Website Maintenance</a></li>
                               
                            </ul>
                        </li>  
                        <li class="dropdown"><a href="">Bulk SMS <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="sms.php">Promotional SMS</a></li>
                                <li><a href="sms.php">Transactional SMS</a></li>
                                <li><a href="sms-pricing.php">SMS Pricing</a></li>
                                <li><a href="voice-pricing.php">Call Pricing</a></li>
                                                           
                            </ul>
                        </li>
                                           
                           <!-- <li class="dropdown"><a href="register.php">Training <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                            <li><a href="register.php"><i class="fa fa-pinterest-p" aria-hidden="true" style="color:#2980b9"></i> PHP </a></li>
                            <li><a href="register.php"><i class="fa fa-database" aria-hidden="true" style="color:#e67f24"></i> MY Sql</a></li>
                            <li><a href="register.php"><i class="fa fa-html5" aria-hidden="true" style="color:#d35400"></i> HTML5</a></li>
                            <li><a href="register.php"> <i class="fa fa-css3" aria-hidden="true" style="color:#3498db"></i> CSS3</a></li>
                            <li><a href="register.php"><i class="fa fa-android" aria-hidden="true" style="color:#27ae60"></i> Android</a></li>
                            <li><a href="register.php"><i class="fa fa-yelp" aria-hidden="true" style="color:#c0392b"></i> JAVA basic + Advance</a></li>
                            <li><a href="register.php"><i class="fa fa-jsfiddle" aria-hidden="true" style="color:#f1c40f"></i> Javascript</a></li>
                            <li><a href="register.php" > <i class="fa fa-desktop" aria-hidden="true" style="color:#2c3e50"></i> Computer Basics</a></li>
                            <li><a href="profile.php" > <i class="fa fa-desktop" aria-hidden="true" style="color:#2c3e50"></i> Profile</a></li>
                            </ul>
                        </li>                   -->
                                            
                        <li><a href="contact.php ">Contact Us</a></li>  
             
                    </ul>
                </div>

           

                <div class="search">
                    <form method="get" action="https://www.google.co.in/search?q=html&site:w3schools.com">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">

                            <input type="text" name ="q" class="search" autocomplete="off" placeholder="Search">
                        </div>

                    </form>
                </div>
                          
                  
                 <div id="loginBox">                
                    <form id="loginForm" action="../../profile.php" method="post">
                        <fieldset id="body">
                            <fieldset>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" value="<?php
echo $_COOKIE['remember_me']; ?>" />
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="pass" id="password" />
                            </fieldset>
                            <input type="submit" id="login" value="Sign in" />
                            <label for="checkbox"><input type="checkbox" id="checkbox" />Remember me</label>
                        </fieldset>
                        <span><a href="#">Forgot your password?</a></span>
                    </form>
                </div>
                
            </div>
            
            </div>

    </header>	






<script type="text/javascript">
$(document).ready(function() {
    $('.search').keydown(function(event) {
        if (event.keyCode == 13) {
            this.form.submit();
            return false;
         }
    });
});
</script>
