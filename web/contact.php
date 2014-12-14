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
<?php   echo my_header('contact'); ?>
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			    <div class="col-md-4 company_ad">
				    <h2>Find Address:</h2>
					<address>
						 <p><i class="fa fa-map-marker large "></i> <span class="address">Snoqualmie, WA</span></p>
				   		<p><i class="fa fa-phone large"></i> (425) 802-5284</p>
				 	 	<p><i class="fa fa-envelope medium"></i> <a class="mailto" href="mailto:jaisveochea@inspanishteaching.com">jaisveochea@inspanishteaching.com</a></p>
                        <p class="secondmail" style="padding-left: 45px;"><a class="mailto" href="mailto:joisochea@inspanishteaching.com">joisochea@inspanishteaching.com</a></p>
				   	</address>
				</div>
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Contact Us:</h2>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
					    <form method="post" action="./_ext/actions.php">
                            <?php 
                                if (isset($_GET["s"]) && $_GET["s"] == 1){ ?>
                                <div class="msg-success">Your message was successfully sent. A copy of the message will be sent to the email address you specified.</div>
                            <?php  } else if (isset($_GET["s"]) && $_GET["s"] == 0){ ?>
                                <div class="msg-error">There was a problem sending your e-mail, please try again later.</div>
                            <?php } ?>
					    	<div>
						    	<span>name</span>
						    	<span><input type="text" name="name" class="form-control"/></span>
						    </div>
						    <div>
						    	<span>e-mail</span>
						    	<span><input type="text" name="email" class="form-control" /></span>
						    </div>
						    <div>
						    	<span>subject</span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" name="contact" value="Send"/></label>
						  </div>
					    </form>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>
</div>
<?= my_footer() ?>
</body>
</html>
