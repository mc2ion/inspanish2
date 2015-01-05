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
<?php   echo my_header('about'); ?>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="about row">
			<h2>About Us</h2>
			<p class="para">Language is so much more than a communication tool. It encompasses geography, history, literature, music, food, tradition and identity.</p>
			<p class="para">Since we moved to Washington State, we have enjoyed sharing our culture and traditions with our friends and community. There is no better way of telling our story than through our native language.</p>
			<p class="para">Spanish has been the best way to share our passion for teaching with our students; toddlers, teenagers and adults. We want this to be the starting point to share our rich culture and traditions that are present throughout the Spanish speaking countries from South America to Europe.</p>
            <!--<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>-->
		</div>
	</div>
</div><!-- end main -->
<div class="main_bg"><!-- start main_btm -->
	<div class="container">
		<div class="about row">
			<div class="col-md-6 content_left">
				<img src="web/images/aboutus-pic1.jpg" alt="" class="img-responsive"/>
			</div>
			<div class="col-md-6 content_right">
				<h2>Jaisve Ochea</h2>
				<p class="para">My name is Jaisve Ochea and I am one of the owners and teachers of Inspanish Inc. I was born in Caracas, Venezuela and lived there until the age of 25. I moved to Hawaii, where I met my Husband of 11 years. I have being living in Snoqualmie for the past 9 years with my family.</p>
				<p class="para">I have two Associate’s degrees, one from the Simón Bolívar University and other from the I.U.N.P. in Caracas, Venezuela. Over six years ago I started teaching Spanish in the Snoqualmie Valley to pre-school children.</p>
                <p class="para">What I have learned, is that children at this age have so much love for life and knowledge. Sharing in their growth and love is something that I take great pride and pleasure in. 
I enjoy and appreciate the opportunities to share my culture, experience and language with all.</p>

                <!--<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>-->
			</div>
		</div>
        <div class="about row">
			<div class="col-md-6 content_left">
				<h2>Jois Ochea</h2>
				<p class="para">My name is Jois Ochea. I was born in Caracas, Venezuela and lived there for 30 years. My hometown allowed me to earn my bachelors degree in Literature. Teaching has been my life for the last 12 years. I have taught Elementary School, High School and College. Spanish is not just my native language, it is also my love. Teaching people how to communicate properly in Spanish is what I strive for. It is more than teaching single words. It is about giving my students the skills and the confidence to express all of their thoughts.</p>
				<p class="para">My husband and I live in North Bend with our dog Bailey. I truly enjoy reading, writing and all kinds of art.</p>
                <p class="para">Mundo (world), Vida (life) and viaje (travel) are my favorite words in Spanish.</p>

                <!--<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>-->
			</div>
			<div class="col-md-6 content_right">
				<img src="web/images/aboutus-pic2.jpg" alt="" class="img-responsive"/>
			</div>
		</div>
	</div>
</div>
</div>
<?= my_footer() ?>
</body>
</html>