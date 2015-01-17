<?php
include('web/common.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<?php   echo my_title(); ?>
<!-- Bootstrap -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.web/js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- start plugins -->
<script type="text/javascript" src="web/js/jquery.min.js"></script>
<script type="text/javascript" src="web/js/bootstrap.js"></script>
<script type="text/javascript" src="web/js/bootstrap.min.js"></script>
<script type="text/javascript" src="web/js/common.js"></script>
<script type="text/javascript" src="web/js/jquery.innerfade.js"></script>
	<script type="text/javascript">
            $(document).ready(
                function(){
                $('#phrases').innerfade({
                    animationtype: 'fade',
                    speed: 850,
                    timeout: 5000,
                    type: 'sequence',
                });
            });
	</script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="web/fonts/css/font-awesome.min.css"/>
<!----font-Awesome----->
</head>
<body>
<div class="content">
    <?php   echo my_header('careers'); ?>
    <!--<div class="main_bg"> start main 
    	<div class="container">
    		<div class="main row">
    			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a></small>
    		</div>
    	</div>
    </div><!-- end main -->
    <div class="main_btm"><!-- start main_btm -->
    	<div class="container">
    		<div class="main row">		
      			<div class="col-md-8">
				  <div class="contact-form">
                        <?php 
                                if (isset($_GET["s"]) && $_GET["s"] == 1){ ?>
                                <div class="msg-success">Thanks for your interest. Your application was successfully sent.</div>
                        <?php  } else if (isset($_GET["s"]) && $_GET["s"] == 0){ ?>
                                <div class="msg-error">There was a problem sending your application, please try again later.</div>
                        <?php } ?>
				  	    <form method="post" action="./_ext/actions.php" enctype="multipart/form-data">
                            <div class="firstpage">
    				            <h2>Careers</h2>
						    	<div class="col-md-12">
    						    	<span>Full name</span>
    						    	<span><input type="text" name="name" class="form-control" /></span>
    						    </div>
    						    <div class="col-md-10">
    						    	<span>Street Address</span>
    						    	<span><input type="text" name="street" class="form-control" /></span>
    						    </div>
                                <div class="col-md-2">
    						    	<span>Apartment #</span>
    						    	<span><input type="text" name="apartment" class="form-control" /></span>
    						    </div>
                                <div class="col-md-4" >
    						    	<span>State</span>
    						    	<span>
                                    <select name="state" class="form-control" >
                                	<option value="Alabama">Alabama</option>
                                	<option value="Alaska">Alaska</option>
                                	<option value="Arizona">Arizona</option>
                                	<option value="Arkansas">Arkansas</option>
                                	<option value="California">California</option>
                                	<option value="Colorado">Colorado</option>
                                	<option value="Connecticut">Connecticut</option>
                                	<option value="Delaware">Delaware</option>
                                	<option value="District Of Columbia">District Of Columbia</option>
                                	<option value="Florida">Florida</option>
                                	<option value="Georgia">Georgia</option>
                                	<option value="Hawaii">Hawaii</option>
                                	<option value="Idaho">Idaho</option>
                                	<option value="Illinois">Illinois</option>
                                	<option value="Indiana">Indiana</option>
                                	<option value="Iowa">Iowa</option>
                                	<option value="Kansas">Kansas</option>
                                	<option value="Kentucky">Kentucky</option>
                                	<option value="Louisiana">Louisiana</option>
                                	<option value="Maine">Maine</option>
                                	<option value="Maryland">Maryland</option>
                                	<option value="MA">Massachusetts</option>
                                	<option value="Massachusetts">Michigan</option>
                                	<option value="Minnesota">Minnesota</option>
                                	<option value="Mississippi">Mississippi</option>
                                	<option value="Missouri">Missouri</option>
                                	<option value="Montana">Montana</option>
                                	<option value="Nebraska">Nebraska</option>
                                	<option value="Nevada">Nevada</option>
                                	<option value="New Hampshire">New Hampshire</option>
                                	<option value="New Jersey">New Jersey</option>
                                	<option value="New Mexico">New Mexico</option>
                                	<option value="New York">New York</option>
                                	<option value="North Carolina">North Carolina</option>
                                	<option value="North Dakota">North Dakota</option>
                                	<option value="Ohio">Ohio</option>
                                	<option value="Oklahoma">Oklahoma</option>
                                	<option value="Oregon">Oregon</option>
                                	<option value="Pennsylvania">Pennsylvania</option>
                                	<option value="Rhode Island">Rhode Island</option>
                                	<option value="South Carolina">South Carolina</option>
                                	<option value="South Dakota">South Dakota</option>
                                	<option value="Tennessee">Tennessee</option>
                                	<option value="Texas">Texas</option>
                                	<option value="Utah">Utah</option>
                                	<option value="Vermont">Vermont</option>
                                	<option value="Virginia">Virginia</option>
                                	<option value="Washington">Washington</option>
                                	<option value="West Virginia">West Virginia</option>
                                	<option value="Wisconsin">Wisconsin</option>
                                	<option value="Wyoming">Wyoming</option>
                                </select>	
                                </span>
                                </div>
                                <div class="col-md-4">
                                    <span>City</span>
       						    	<span><input type="text" name="city" class="form-control" /></span>
                                </div>
                                <div class="col-md-4"> 
                                    <span>Zip Code</span>
       						    	<span><input type="text" name="zipcode" class="form-control" /></span>
                                </div>
                                <div class="col-md-6">
    						    	<span>Phone</span>
    						    	<span><input type="text" name="phone" class="form-control" /></span>
    						    </div>
                                 <div class="col-md-6" >
    						    	<span >Email</span>
    						    	<span><input type="text" name="email" class="form-control" /></span>
    						    </div>
                                
    						    <div class="col-md-12">
    						    	<span>Tell us about your teaching experience</span>
    						    	<span><textarea name="experience"> </textarea></span>
    						    </div>
    						   <div class="col-md-12" style="text-align: right;">
    						   	      <a href="#" class="fa-btn btn-1 btn-1e rf-button" onclick="nextReference();">Next</a>
    						  </div>
                          </div> <br />
                          <div class="secondpage">
                            <h2>Careers</h2>
                            <h3>Please list two professional references:</h3><br />
                            <h4>Reference 1</h4>
    						    <div class="col-md-12">
    						    	<span>Full name</span>
    						    	<span><input type="text"  name="namerf1" class="form-control" /></span>
        					   </div>	
                               <div class="col-md-12">
    						    	<span>Relationship</span>
    						    	<span><input type="text" name="rshiprf1" class="form-control" /></span>
        					   </div>
                               <div class="col-md-4">
    						    	<span>Company</span>
    	                            <span><input type="text" name="cmprf1" class="form-control" /></span>
        					   </div>
                               <div class="col-md-4">
    						    	<span>Phone</span>
    						          <span><input type="text" name="phonerf1" class="form-control" /></span>
        					   </div>
                               <div class="col-md-4">
    						    	<span>Email</span>
    						    	<span><input type="text" name="emailrf1" class="form-control" /></span>
        					   </div>
                               <div style="clear: both;"></div>
                               <div style="margin-top: 50px;">
                                    <h4>Reference 2</h4>
        						    <div class="col-md-12">
    						    	<span>Full name</span>
    						    	<span><input type="text" name="namerf2" class="form-control" /></span>
        					   </div>	
                               <div class="col-md-12">
    						    	<span>Relationship</span>
    						    	<span><input type="text" name="rshiprf2" class="form-control" /></span>
        					   </div>
                               <div class="col-md-4">
    						    	<span>Company</span>
    	                            <span><input type="text" name="cmprf2" class="form-control" /></span>
        					   </div>
                               <div class="col-md-4">
    						    	<span>Phone</span>
    						          <span><input type="text"  name="phonerf2" class="form-control" /></span>
        					   </div>
                               <div class="col-md-4">
    						    	<span>Email</span>
    						    	<span><input name="emailrf2" class="form-control" /></span>
        					   </div>
							   <div class="col-md-4 col-xs-12" >
                                   <div class="fileUpload fa-btn btn-2 btn-2e esp">
                                        <span>Attach your resume</span>
                                        <input name="attachment" type="file" />
                                    </div>
                               </div>
                                <div class="col-md-8 col-xs-12 br">
                                    <label class="fa-btn btn-1 btn-1e"><input type="submit" name="add-career" value="Send"/></label>
                               </div>	
                              </div>
                          </div>
					    </form>
				    </div>
  			</div>	
              <div class="col-md-4 company_ad"></div>	
  			<div class="clearfix"></div>		
	       </div>
        </div> 
     </div>
</div>
<?= my_footer() ?>
</body>
</html>
