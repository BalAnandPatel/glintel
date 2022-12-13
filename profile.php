<?php
$servername = "localhost";
$username = "glintud1_admin";
$password = "Glintelxyz@2017#";
$dbname = "glintud1_credential";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


  

	    ?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="Description" content="We provide SEo optimisation in Mumbai and U.P.. Glintelindia is leading SEO optimisation,Rank improver,adword and keyword suggestion company In U.P., delhi,bhatinda,lucknow,chennai and mumbai.Provides business marketing solutions.Contact us- 9984087027, 8879545725">

<meta name="Keywords" content=" Website development company India, Website development in Mumbai, Website development in U.P., Website company India,SEO lucknow, Delhi, Mumbai, Jaunpur, standalone application, India,U.P., Allahabad,Thane,offices,home,freelance,rank checker, web optimisation,adwords, keywords,robot.txt, meta tag, link suggestion,content writing,keyword density, keyword wrapper,regular content update ">
<meta name="keyphrases" content="Website development company India, Website development in Mumbai, Website development in U.P., Website company India,SEO lucknow, Delhi, Mumbai, Jaunpur, standalone application, India,U.P., Allahabad,Thane,offices,home,freelance,rank checker, web optimisation,adwords, keywords,robot.txt, meta tag, link suggestion,content writing,keyword density, keyword wrapper,regular content update">
<meta name="GOOGLEBOT" content="INDEX, FOLLOW" />	
<meta name="GOOGLEBOT" content="NOODP" />	
<meta name="revisit-after" content="7 days" />    
<meta name="reply-to" content="info@glintelindia.com" />    
<meta name="document-classification" content="Internet" />    
<meta name="document-type" content="Public" />    
<meta name="document-rating" content="Safe for Childrens" />    
<meta name="document-distribution" content="Global" />    
<meta name="robots" content="index,follow">	
<meta name="robots" content="NOODP">	
<?php include('script/glintel/header.php');?>
</head>
<body>
	<?php include('script/glintel/menu.php');?>


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <div class="alert alert-warning fade in">
                           
                            <h4><span align="center"></span></h4>
                           <p>Student Details</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->
 
  <?
  $mail=$_SESSION['login'];
   $sql = "SELECT * FROM stu_registration where email='$mail'";
$result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) { 
  	   
	
  ?>        
     
    
    <section id="portfolio-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="http://www.glintel.in/<?  echo $row['upload']; ?>" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="project-name overflow">
                        <h2 class="bold"><?  echo $row['name']; ?></h2>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><i class="fa fa-clock-o"></i>Joining:</a></li>
                            <li><a href="#"><?  echo $row['enroll']; ?></a></li>
                        </ul>
			<br>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><i class="fa fa-clock-o"></i>Email:</a></li>
                            <li><a href="#"><?  echo $row['email']; ?></a></li>
                        </ul>
                    </div>
                    <div class="project-info overflow">
                        <h3>Course Info</h3>
                        <p><ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><i class="fa fa-check-square"></i><?  echo $row['category']; ?></a></li>
                            
                        </ul></p><br>
                        <ul class="elements">
                            <li><i class="fa fa-angle-right"></i> <?  echo $row['course']; ?></li>
                            <li><i class="fa fa-angle-right"></i>Fees: <?  echo $row['price']; ?></li>
                            
                        </ul>
                    </div>
                    <div class="client overflow">
                        <h3>Roll NO:</h3>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><i class="fa fa-bolt"></i><?  echo $row['roll']; ?></a></li>
                        </ul>
                    </div>
                    <div class="skills overflow">
                        <h3>Father Name:</h3>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><i class="fa fa-bolt"></i><?  echo $row['fname']; ?></a></li>
                        </ul>
                    </div>
                    <div class="client overflow">
                        <h3>Fees Paid:</h3>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><i class="fa fa-bolt"></i><?  echo $row['fees']; ?></a></li>
                        </ul>
                    </div>
		    <? if($row['certificate']!='') {?>
                    <div class="live-preview">
                        <a href="http://glintel.in/<?  echo $row['u_cert']; ?>" class="btn btn-common uppercase">Certificate</a>
                    </div>
		    <?}?>
                </div>
            </div>
        </div>
    </section>
     <?
     	
    }
} else {
    echo "0 results";
}
$conn->close();?>   
    
     <!--/#portfolio-information-->
    <!--/#company-information-->
<br>


   <?php include('script/glintel/footer.php');?>