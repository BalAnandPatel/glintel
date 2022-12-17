<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<?php include('script/glintel/header.php');?>
</head>
<body>
	<?php include('script/glintel/menu.php');?>

   <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12 col-md-offset-4">
                            <h1 class="title">Enrol Here........</h1>
                            <p>Submit your details we will get back to you.</p>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->
      
        <div class="price-table">
		 <div class="row">
		   <div class="col-sm-6 col-md-offset-3">
		 					<form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" autocomplete="off" class="form-control" required="required" placeholder="Name">
                            </div>
							 <div class="form-group">
						<select class="form-control" name="course">
						  <option value="">--- Select Course ---</option>
						  <option value="PHP">PHP</option>
						  <option value="MYSQL">MySql</option>
						  <option value="Java">JAVA</option>
						  <option value="HTML5">HTML5</option>
						  <option value="CSS3">CSS</option>
						  <option value="JS">Javascript</option>
						  <option value="CB">Computer Basics</option>
						</select>
                            </div>
                            <div class="form-group">
                                <input type="email" autocomplete="off" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
							<div class="form-group">
                                <input type="number" autocomplete="off" name="mobile" class="form-control" required="required" placeholder="Mobile no">
                            </div>
                            <div class="form-group">
                                <textarea name="address" autocomplete="off" id="address" required="required" class="form-control" rows="8" placeholder="Full Address"></textarea>
                            </div>  
	 <div class="form-group">
						<select class="form-control">
						  <option value="">--- Select Payment Option ---</option>
						  <option value="online">Online</option>
						  <option value="deposit">Deposit</option>
						  <option value="ins">At Institute</option>
						  
						</select>
                            </div>
							 <div class="form-group">
                               
                            </div> 
							
							 <div class="form-group sidebar-box" align="center">
							 
                              <input type="checkbox" name="rules" value="rules" required="required"><a onclick="document.getElementById('div_name2').style.display='';return false;" href="" style="text-decoration:none;border-bottom:1px dotted blue; ">  Terms & Condition</a></p>
                            </div> 
							 <div id="div_name2" style="display:none;padding: 15px 0px;">
							 <a onclick="document.getElementById('div_name2').style.display='none';return false;" href=""style="text-decoration:none;border-bottom:1px dotted blue; float: right;">&#10008</a>
							<br>
Last updated: 24/04/2016<br><br>
<p align="justify">Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using
the http://www.glintelindia.com website and the <b>Glintel mobile</b>
application (the "Service") operated by Glintelindia ("us", "we", or "our").
Your access to and use of the Service is conditioned on your acceptance of and compliance with
these Terms. These Terms apply to all visitors, users and others who access or use the Service.
By accessing or using the Service you agree to be bound by these Terms. If you disagree
with any part of the terms then you may not access the Service.</p>
<b>Purchases</b>
<p align="justify">If you wish to purchase any product or service made available through the Service ("Purchase"),
you may be asked to supply certain information relevant to your Purchase including, without
limitation, your details are secured with us.</p>

<b>Subscriptions</b><br>
Some parts of the Service are billed on a subscription basis ("Subscription(s)"). You will be billed in
advance on a recurring product / item...
The Subscriptions section is for SaaS businesses.
<br><br><b>Content</b><br>
<p align="justify">Our Service allows you to post, link, store, share and otherwise make available certain information,text, graphics, videos, or other material ("Content"). You are responsible for the any unauthorised usage.
The Content section is for businesses that allow users to create, edit, share, make content on
their websites or apps.<p>
<b>Links To Other Web Sites.</b><br>
<p align="justify">Our Service may contain links to third­party web sites or services that are not owned or controlled
by GlintelIndia.
GlintelIndia has no control over, and assumes no responsibility for, the content,
privacy policies, or practices of any third party web sites or services. You further acknowledge and
agree that glintelindia shall not be responsible or liable, directly or indirectly, for any
damage or loss caused or alleged to be caused by or in connection with use of or reliance on any
such content, goods or services available on or through any such web sites or services.</p>
<b>Changes</b><br>
<p align="justify">We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a
revision is material we will try to provide at least 30 (change this) days' notice prior to any new terms
taking effect. What constitutes a material change will be determined at our sole discretion.</p>
<b>Contact Us</b><br>
If you have any questions about these Terms, please contact us.
</div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Register">
                            </div>
                        </form>
						</div>
						 <div class="col-sm-3 ">
						 <img src="images/home/minions.png">
						 </div>
						
						</div>
		</div>


   
   <?php include('script/glintel/footer.php');?>
