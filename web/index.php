<?php
include('web/common.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<?php   echo my_title(); ?>
<!-- Bootstrap -->
<link href="web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.web/js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="web/js/jquery.min.js"></script>
<script type="text/javascript" src="web/js/bootstrap.js"></script>
<script type="text/javascript" src="web/js/bootstrap.min.js"></script>
<link href="web/css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="web/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="web/js/jquery.cslider.js"></script>
	<script type="text/javascript">
			$(function() {
				$('#da-slider').cslider({
					autoplay : false,
					bgincrement : 450,
                    interval    : 15000  
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
<?php   echo my_header('index'); ?>
<div class="slider_bg"><!-- start slider -->
    <div class="bgcolor">
	<div class="container">
		<div id="da-slider" class="da-slider text-center">
			<div class="da-slide">
				<h2>education portal</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="hide_text"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>
				<h3 class="da-link"><a href="./about.php" class="fa-btn btn-1 btn-1e">view more</a></h3>
			</div>
			<div class="da-slide">
				<h2>online education</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="hide_text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>
				<h3 class="da-link"><a href="./about.php" class="fa-btn btn-1 btn-1e">view more</a></h3>
			</div>
			<div class="da-slide">
				<h2>education portal</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="hide_text"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>
				<h3 class="da-link"><a href="./about.php" class="fa-btn btn-1 btn-1e">view more</a></h3>
			</div>
			<div class="da-slide">
				<h2>online education</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="hide_text"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>
				<h3 class="da-link"><a href="./about.php" class="fa-btn btn-1 btn-1e">view more</a></h3>
			</div>
	   </div>
	</div>
    </div>
</div><!-- end slider -->
<div class="zigzag"><!-- start main -->
	<div class="container">
		<div class="main row">
			<div class="col-md-3 images_1_of_4 text-center">
				<span class="bg"><i class="fa fa-child"></i></span>
				<h4><a href="#">Kids</a></h4>
				<a href="./services.php" class="fa-btn btn-1 btn-1e">learn more</a>
			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-home"></i></span>
				<h4><a href="#">Tutoring</a></h4>
				<a href="./services.php" class="fa-btn btn-1 btn-1e">learn more</a>
			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-graduation-cap"></i></span>
				<h4><a href="#">Schools</a></h4>
				<a href="./services.php" class="fa-btn btn-1 btn-1e">learn more</a>
			</div>		
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-male"></i> </span>
				<h4><a href="#">Adults</a></h4>
				<a href="./services.php" class="fa-btn btn-1 btn-1e">learn more</a>
			</div>		
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-briefcase"></i> </span>
				<h4><a href="#">Businesses</a></h4>
				<a href="./services.php" class="fa-btn btn-1 btn-1e">learn more</a>
			</div>		
		</div>
	</div>
</div><!-- end main -->
<div ><!-- start main_btm -->
	<div class="container main_btm">
		<div class="main row">
            <div class="col-md-6 content_left">
                <div class="contactus">
                    <h4>Contact Us</h4>
                    <div>Do you have any question?</div>
                </div>
            </div>
            <div class="col-md-6 content_right"><br /><br />
                <i class="fa fa-map-marker large"></i> <span style="font-size: 16px;">Seattle, US</span><br /><br />
                <i class="fa fa-phone large"></i> <span style="font-size: 16px;">425-8025284</span><br /><br />
                <i class="fa fa-envelope medium"></i> <span style="font-size: 16px;">inspanish.wa@gmail.com</span><br /><br />
			</div>
		</div>
				<!----start-img-cursual----
					<div id="owl-demo" class="owl-carousel text-center">
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="web/images/c1.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">vehicula diam</a></h4>
								<p>
									Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="web/images/c2.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Morbi nunc</a></h4>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="web/images/c3.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Lorem ipsum</a></h4>
								<p>
									On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="web/images/c4.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Sed faucibus</a></h4>
								<p>
									Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="web/images/c2.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Lorem ipsum</a></h4>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="web/images/c3.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Lorem ipsum</a></h4>
								<p>
									On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="web/images/c4.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">vehicula diam</a></h4>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="web/images/c1.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Lorem ipsum</a></h4>
								<p>
									On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="web/images/c2.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Lorem ipsum</a></h4>
								<p>
									Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="web/images/c3.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">vehicula diam</a></h4>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="web/images/c1.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Lorem ipsum</a></h4>
								<p>
									On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="web/images/c4.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Morbi nunc</a></h4>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								</p>
							</div>
						</div>
					</div>
					----//End-img-cursual---->
	</div>
</div>
<?= my_footer() ?>
</body>
</html>