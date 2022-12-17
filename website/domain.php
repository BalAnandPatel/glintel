<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard | Glintel</title>
   <?php include('script/glintel/header.php');?>
<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/lightbox.css" rel="stylesheet"> 
		<link href="css/animate.min.css" rel="stylesheet"> 
		<link href="css/main.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<link rel="stylesheet" 
	href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
	<script type="text/javascript" 
	src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->       
		
	<style>
	table.dataTable tr.odd { background-color:  red; }  
	table.dataTable tr.even { background-color: #bdc3c7;}
	#example {font-size: 12px;}
	#blog
	{
	 background-image: url(images/bgimg.png);
	background-repeat: repeat;
	}
	</style>

</head><!--/head-->

<body>
	<?php include('script/glintel/menu.php');?>
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title" align="center">DashBoard</h1>
                            <p align="center">Welcome, </p>
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
                            <h3>Categories</h3>
                            <ul class="nav navbar-stacked">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Personal details<span class="pull-right">(1)</span></a></li>
                                <li class="active"><a href="#">Purchase <span class="pull-right">(8)</span></a></li>
                                <li><a href="#">Renewal <span class="pull-right">(4)</span></a></li>
                                <li><a href="#">Domain <span class="pull-right">(9)</span></a></li>
                                <li><a href="#">Applications<span class="pull-right">(3)</span></a></li>
                                <li><a href="#">Training<span class="pull-right">(2)</span></a></li>
                                <li><a href="#">Inquiry<span class="pull-right">(4)</span></a></li>
                               
                                
                            </ul>
                        </div>
                      
                       
                    </div>
                </div>
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                            <div class="single-blog two-column">
                                <div class="col-md-12">
                       
    
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th style="color:#c0392b">Name</th>
                <th style="color:#c0392b">Price</th>
                <th style="color:#c0392b">Order Placed</th>
               
                <th style="color:#c0392b">Renewal</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                 <th>Name</th>
                <th>Price</th>
                <th>Order Placed</th>
               
                <th>Renewal</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
               
                <td style="color:green">&#10004;</td>
              
            </tr>
           
            <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
               
                <td style="color:green">&#10004;</td>
              
            </tr>
            <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
               
                <td style="color:green"&#10004;</td>
                
            </tr>
            
        </tbody>
    </table>
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

		<script>

	$(document).ready(function() {
		$('#example').DataTable( {
			"pagingType": "full_numbers"
		} );
	} );
	</script>

		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/lightbox.min.js"></script>
		<script type="text/javascript" src="js/wow.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script> 
	</body>
	</html>
		