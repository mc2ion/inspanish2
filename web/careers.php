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
				  	    <form method="post" action="./_ext/actions.php">
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
                                	<option value="AL">Alabama</option>
                                	<option value="AK">Alaska</option>
                                	<option value="AZ">Arizona</option>
                                	<option value="AR">Arkansas</option>
                                	<option value="CA">California</option>
                                	<option value="CO">Colorado</option>
                                	<option value="CT">Connecticut</option>
                                	<option value="DE">Delaware</option>
                                	<option value="DC">District Of Columbia</option>
                                	<option value="FL">Florida</option>
                                	<option value="GA">Georgia</option>
                                	<option value="HI">Hawaii</option>
                                	<option value="ID">Idaho</option>
                                	<option value="IL">Illinois</option>
                                	<option value="IN">Indiana</option>
                                	<option value="IA">Iowa</option>
                                	<option value="KS">Kansas</option>
                                	<option value="KY">Kentucky</option>
                                	<option value="LA">Louisiana</option>
                                	<option value="ME">Maine</option>
                                	<option value="MD">Maryland</option>
                                	<option value="MA">Massachusetts</option>
                                	<option value="MI">Michigan</option>
                                	<option value="MN">Minnesota</option>
                                	<option value="MS">Mississippi</option>
                                	<option value="MO">Missouri</option>
                                	<option value="MT">Montana</option>
                                	<option value="NE">Nebraska</option>
                                	<option value="NV">Nevada</option>
                                	<option value="NH">New Hampshire</option>
                                	<option value="NJ">New Jersey</option>
                                	<option value="NM">New Mexico</option>
                                	<option value="NY">New York</option>
                                	<option value="NC">North Carolina</option>
                                	<option value="ND">North Dakota</option>
                                	<option value="OH">Ohio</option>
                                	<option value="OK">Oklahoma</option>
                                	<option value="OR">Oregon</option>
                                	<option value="PA">Pennsylvania</option>
                                	<option value="RI">Rhode Island</option>
                                	<option value="SC">South Carolina</option>
                                	<option value="SD">South Dakota</option>
                                	<option value="TN">Tennessee</option>
                                	<option value="TX">Texas</option>
                                	<option value="UT">Utah</option>
                                	<option value="VT">Vermont</option>
                                	<option value="VA">Virginia</option>
                                	<option value="WA">Washington</option>
                                	<option value="WV">West Virginia</option>
                                	<option value="WI">Wisconsin</option>
                                	<option value="WY">Wyoming</option>
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
							   <div class="col-md-4" >
                                   <div class="fileUpload fa-btn btn-2 btn-2e esp">
                                        <span>Attach your resume</span>
                                        <input type="file" class="upload" />
                                    </div>
                               </div>
                                <div class="col-md-8" style="text-align: right;">
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
