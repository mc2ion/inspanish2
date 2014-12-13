<?php
include('web/common.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<?php   echo my_title(); ?>
<!-- Bootstrap -->
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.web/js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="web/js/jquery.min.js"></script>
<script type="text/javascript" src="web/js/bootstrap.js"></script>
<script type="text/javascript" src="web/js/bootstrap.min.js"></script>
<link href="web/css/slider.css?v=03" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="web/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="web/js/jquery.cslider.js"></script>
<script type="text/javascript" src="web/js/jquery.innerfade.js"></script>
	<script type="text/javascript">
			$(function() {
				$('#da-slider').cslider({
					current     : 0,    
					autoplay : true,
					bgincrement : 450,
                    interval    : 10000 
				});

			});
            
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
 <!--<link href="web/css/owl.carousel.css" rel="stylesheet"/>
<script src="web/js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});
			});
		</script>-->
<link rel="stylesheet" href="web/fonts/css/font-awesome.min.css"/>
</head>
<body>
<div class="content">
<?php   echo my_header('index'); ?>
<div class="slider_bg"><!-- start slider -->
   	<div class="container">
		<div id="da-slider" class="da-slider text-center">
			<div class="da-slide" >
				<h2 style="top: 35%;">¡BIENVENIDOS!</h2>
				<div class="da-img">
					<img src="web/images/welcome.png" class="img1" alt="image01" />
				</div>
			</div>
			<div class="da-slide" >
				<h2>education portal 1</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="hide_text"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>
				<h3 class="da-link"><a href="single-page.html" class="fa-btn btn-1 btn-1e">view more</a></h3>
				<div class="da-img">
					<img src="web/images/wall7.jpeg" class="img1" alt="image01" />
				</div>
			</div>
			<div class="da-slide">
				<h2>online educations 2</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="hide_text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>
				<h3 class="da-link"><a href="single-page.html" class="fa-btn btn-1 btn-1e">view more</a></h3>
				<div class="da-img">
					<img src="web/images/wall6.jpeg" alt="image01" />
				</div>
			</div>
			<div class="da-slide">
				<h2>education portal 3</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="hide_text"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>
				<h3 class="da-link"><a href="single-page.html" class="fa-btn btn-1 btn-1e">view more</a></h3>
				<div class="da-img">
					<img src="web/images/wall5.jpg" alt="image01" />
				</div>
			</div>
			<div class="da-slide">
				<h2>online educations 4</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="hide_text"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>
				<h3 class="da-link"><a href="single-page.html" class="fa-btn btn-1 btn-1e">view more</a></h3>
				<div class="da-img">
					<img src="web/images/wall9.jpg" alt="image01" />
				</div>
			</div>
	</div>
</div>
<div class="zigzag"><!-- start main -->
	<div class="container">
		<div class="main row">
			<div class="col-md-3 col-xs-12 images_1_of_4 bg1 text-center">
				<span class="bg"><a href="./services.php?less=1"><img src="web/images/kids-icon1.png" alt="Kids Program" height="80" width="80" style="margin-top:18%"></a></span>
				<h4><a href="./services.php?less=1">Kids</a></h4>
				<!--<a href="./services.php" class="fa-btn btn-1 btn-1e">learn more</a>-->
			</div>
			<div class="col-md-3 col-xs-12 images_1_of_4 bg1 text-center">
				<span class="bg"><a href="./services.php?less=2"><img src="web/images/adults-icon7.png" alt="Tutoring Program" height="80" width="80" style="margin-top:18%"></a></span>
				<h4><a href="./services.php?less=2">Tutoring</a></h4>
				<!--<a href="./services.php" class="fa-btn btn-1 btn-1e">learn more</a>-->
			</div>
			<div class="col-md-3 col-xs-12 images_1_of_4 bg1 text-center">
				<span class="bg"><a href="./services.php?less=3"><img src="web/images/schools-icon2.png" alt="Schools Program" height="80" width="80" style="margin-top:18%"></a></span>
				<h4><a href="./services.php?less=3">Schools</a></h4>
				<!--<a href="./services.php" class="fa-btn btn-1 btn-1e">learn more</a>-->
			</div>		
			<div class="col-md-3 col-xs-12 images_1_of_4 bg1 text-center">
				<span class="bg"><a href="./services.php?less=4"><img src="web/images/adults-icon2.png" alt="Adults Program" height="80" width="80" style="margin-top:18%"></a></span>
				<h4><a href="./services.php?less=4">Adults</a></h4>
				<!--<a href="./services.php" class="fa-btn btn-1 btn-1e">learn more</a>-->
			</div>		
			<div class="col-md-3 col-xs-12 images_1_of_4 bg1 text-center">
				<span class="bg"><a href="./services.php??less=5"><img src="web/images/businesses-icon.png" alt="Businesses Program" height="80" width="80" style="margin-top:18%"></a></span>
				<h4><a href="./services.php?less=5">Businesses</a></h4>
				<!--<a href="./services.php" class="fa-btn btn-1 btn-1e">learn more</a>-->
			</div>		
		</div>
	</div>
</div><!-- end main -->
<div style="display:none;"><!-- start main_btm -->
	<div class="container main_btm">
		<div class="main row">
            <div class="col-md-6 content_left">
                <a class="contactlink" href="contact.php">
					<div class="contactus">
						<h4>Contact Us</h4>
						<div>Do you have any question?</div>
					</div>
				</a>
            </div>
            <div class="col-md-6 content_right"><br /><br />
                <i class="fa fa-map-marker large"></i> <span style="font-size: 16px;">Seattle, US</span><br /><br />
                <i class="fa fa-phone large"></i> <span style="font-size: 16px;">425-8025284</span><br /><br />
                <i class="fa fa-envelope medium"></i> <span style="font-size: 16px;">inspanish.wa@gmail.com</span><br /><br />
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?= my_footer('index') ?>
</body>
</html>