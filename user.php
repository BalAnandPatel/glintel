<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard | Glintel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
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

                    <a class="navbar-brand" href="index.html">
                        <h1><img src="images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="singlecolor/index.html">Single Color</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="aboutus.html">About</a></li>
                                <li><a href="aboutus2.html">About 2</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="contact2.html">Contact us 2</a></li>
                                <li><a href="404.html">404 error</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>                    
                        <li class="dropdown active"><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="blog.html">Blog Default</a></li>
                                <li><a href="blogtwo.html">Timeline Blog</a></li>
                                <li><a href="blogone.html">2 Columns + Right Sidebar</a></li>
                                <li><a class="active" href="blogthree.html">1 Column + Left Sidebar</a></li>
                                <li><a href="blogfour.html">Blog Masonary</a></li>
                                <li><a href="blogdetails.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="portfolio.html">Portfolio <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="portfolio.html">Portfolio Default</a></li>
                                <li><a href="portfoliofour.html">Isotope 3 Columns + Right Sidebar</a></li>
                                <li><a href="portfolioone.html">3 Columns + Right Sidebar</a></li>
                                <li><a href="portfoliotwo.html">3 Columns + Left Sidebar</a></li>
                                <li><a href="portfoliothree.html">2 Columns</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            </ul>
                        </li>                         
                        <li><a href="shortcodes.html ">Shortcodes</a></li>                    
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title" align="center">DashBoard</h1>
                            <p align="center">Welcome,<? echo $d=$_SESSION["id"]; ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                      
                        <div class="sidebar-item categories">
                            <h3><a href="user">Home</a></h3>
                            <ul class="nav navbar-stacked">
                                
                                <li><a href="user">Personal details<span class="pull-right">(1)</span></a></li>
                                <li class="active"><a href="purchase">Purchase <span class="pull-right">(8)</span></a></li>
                                <li><a href="renewal">Renewal <span class="pull-right">(4)</span></a></li>
                                <li><a href="domain">Domain <span class="pull-right">(9)</span></a></li>
                                <li><a href="app">Applications<span class="pull-right">(3)</span></a></li>
                               
                                <li><a href="inquiry">Inquiry<span class="pull-right">(4)</span></a></li>
                               
                                
                            </ul>
                        </div>
                        <div class="sidebar-item tag-cloud">
                            <h3>Tag Cloud</h3>
                            <ul class="nav nav-pills">
                                <li><a href="#">Corporate</a></li>
                                <li><a href="#">Joomla</a></li>
                                <li><a href="#">Abstract</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Product</a></li>
                            </ul>
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                            <div class="single-blog two-column">
                                <div class="col-md-12">
                        <ul id="tab1" class="nav nav-tabs">
                            <li class="active"><a href="#tab1-item1" data-toggle="tab">Personal details</a></li>
                            <li><a href="#tab1-item2" data-toggle="tab">Change pass</a></li>
                            <li><a href="#tab1-item3" data-toggle="tab">Verify</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tab1-item1">
                                 <div class="contact-form bottom">
                        <h2 align="center">User Profile</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                               Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <? echo $_SESSION["id"]; ?>
                            </div>
                            <div class="form-group">
                               Mobile: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? echo $_SESSION["mobile"]; ?>
                            </div>
							<div class="form-group">
                               E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <? echo $_SESSION["email"]; ?>
                            </div>
                            <div class="form-group">
                               Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <? echo $_SESSION["address"]; ?>,<br><? echo $_SESSION["city"]; ?>,<? echo $_SESSION["state"]; ?>
                            </div>                        
                          
                           <div class="form-group">
                              Last Activity: <? echo $_SESSION["ll"]; ?>
                            </div>  

                        </form>
                    </div>
                            </div>
                            <div class="tab-pane fade" id="tab1-item2">
                                <div class="contact-form bottom">
                        <h2 align="center">Change Password</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                               Old Password: <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                               New  Password: <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
							  <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>                  
                          
                        </form>
                    </div>
                            </div>
                            <div class="tab-pane fade" id="tab1-item3">
                                <div class="contact-form bottom">
                        <h2 align="center">Verify Yourself</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                           <? if($_SESSION["status"]=='FALSE'){ ?>
                            <div class="form-group">
                               Mobile: <input type="text" name="name" class="form-control" readonly required="required" value='<? echo $_SESSION["mobile"] ?>' placeholder="Name">
                            </div>

							     <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>                  
                       <?   }else
{ ?>
Label :<? echo $_SESSION["mobile"] ?>   <span>Verified</span> 
<?}?>
                        </form>
                    </div>
                        </div>
                    </div>
                            </div>
                        </div>
                       
                      
                    </div>
                  
                 </div>
            </div>
        </div>
    </section>
    <!--/#blog-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/home/profile1.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                                <h3><a href="#">- Jhon Kalis</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/home/profile2.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                                <h3><a href="">- Abraham Josef</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                        Phone: +1 (123) 456 7890 <br> 
                        Fax: +1 (123) 456 7891 <br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        Unit C2, St.Vincent's Trading Est., <br> 
                        Feeder Road, <br> 
                        Bristol, BS2 0UY <br> 
                        United Kingdom <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script> 
</body>
</html>
		