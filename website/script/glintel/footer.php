<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5035603772067956",
    enable_page_level_ads: true
  });
</script>
 <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
				
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
						<marquee  behavior="scroll" direction="up" scrollamount="1" onmouseover="this.stop();" onmouseout="this.start();">
                         <?php 
                             foreach($result as $key => $value){
                             foreach($value as $key1 => $value1)
                            {
                           ?>
                        <div class="media">
                            <div class="pull-left">
                                <img class="circulars" src="<?php $id=$value1->id; echo $imagepath.$id."/photo_".$id.".png"; ?>" height="70" width="70" alt=""/>
                            </div>
                            <div class="media-body">
                                <blockquote><?php echo $value1->clientComment; ?></blockquote>
                                <h3><a href="#"><?php echo $value1->clientName; ?></a></h3>
                            </div>
                         </div>
                    
                       <?php } } ?>
</marquee>						
                    </div> 
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="info@glintel.xyz">info@glintel.com</a> <br> 
                        Mobile: +91 (998) 408 7027<br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        GlintelIndia, GroundFloor, <br> 
                       Near SujanGanj Bypass Road <br> 
                        Mungra Badshahpur, <br> 
                        U.P. -222202 <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form iddd="main-contact-form" name="contact-form" method="post" action="script/sendemail.php">
                            <div class="form-group">
                                <label for="cars">Service For</label>
                                <select class="form-control" name="serviceName" required id="cars">
                                <option value="Na" selected>Select a service</option>
                                <option value="Website Design">Website Design</option>
                                <option value="Desktop Application">Desktop Application</option>
                                <option value="Mobile Application">Mobile Application</option>
                                <option value="Logo Design">Logo Design</option>
                                <option value="Website Maintenance">Website Maintenance</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="clientName" class="form-control" autocomplete="off" required="required" placeholder="Name">
                            </div>
                               <div class="form-group">
                                <input type="number" name="mobile" class="form-control" autocomplete="off" required="required" placeholder="Mobile No.">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" autocomplete="off" required="required" placeholder="Email Id">
                            </div>
                             <div class="form-group">
                                <input type="text" name="address" class="form-control" autocomplete="off" required="required" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <textarea name="clientMessage" id="message" required="required" autocomplete="off" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2550503467341930",
    enable_page_level_ads: true
  });
</script></div>
                
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Glintel Technologies Pvt. Ltd. 2014. All Rights Reserved.</p>
                        <p>Devloped by <a target="_blank" href="http://glinte.com/">Glintel Technlogies</a></p>
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
 <script type="text/javascript" src="js/gmaps.js"></script>
 <script type="text/javascript" src="js/jquery.countTo.js"></script> 

</body>

</html>
