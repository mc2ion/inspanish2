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
<!----font-Awesome----->
   	<link rel="stylesheet" href="web/fonts/css/font-awesome.min.css"/>
<!----font-Awesome----->
</head>
<body>
<div class="content">
<?php   echo my_header('about'); ?>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="about row">
			<h2>Education Portal</h2>
			<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words. </p>
			<!--<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>-->
		</div>
	</div>
</div><!-- end main -->
<div class="main_bg"><!-- start main_btm -->
	<div class="container">
		<div class="about row">
			<div class="col-md-6 content_left">
				<img src="web/images/pic1.jpg" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 content_right">
				<h2>Online Education</h2>
				<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words. </p>
				<!--<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>-->
			</div>
		</div>
	</div>
</div>
</div>
<?= my_footer() ?>
</body>
</html>