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
<?php   echo my_header('services'); ?>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="technology row">
			<h2>Lessons</h2>
            <?php echo  my_lessons(); ?>
			<!--<div class="technology_list1">
				<div class="col-md-2 images_1_of_4 bg1">
					<span class="bg"><img src="web/images/kids-icon1.png" alt="Kids Program" height="80" width="80" style="margin-top:18%"></span>
				</div>
                <div class="col-md-10 tech_para">
			 	   <h4>Spanish Lessons for Kids</h4>
					<p class="para">Speaking and listening skills are emphasized in all Spanish classes as students learn to count to 20, 50, 100 and more. These lessons focus on basic greetings, colors, letters, numbers, shapes, seasons, weather and other topics.</p>
				    <p class="para">Cultural lessons are integrated into each instruction. Songs, games, visuals, art and writing projects make the language as tangible as possible. Class is conducted almost exclusively in Spanish and relies on teacher created materials.</p>
                    <p class="para">We are also running our Spanish Enrichment Program at the YMCA at Snoqualmie Ridge and the YMCA at Hazelwood, in New Castle.</p>
                    <p class="para">We would love to give your children the opportunity to learn a new language and culture. We can create a custom curriculum to teach private lessons or group lessons. Let’s have fun learning Spanish!</p>
                    <p class="para">For prices and scheduling, <a href="contact.php">contact us</a>.</p>
                </div>
			     <div class="clearfix"></div>
			</div>
			<div class="technology_list1">
				<div class="col-md-2 images_1_of_4 bg1">
				    <span class="bg"><img src="web/images/adults-icon7.png" alt="Tutoring Program" height="80" width="80" style="margin-top:18%"></span>
				</div>
                <div class="col-md-10 tech_para">
				    <h4>Spanish Tutoring</h4>
					<p class="para">Are you learning Spanish at school, and feel that you need some help with homework and tests?</p>
                    <p class="para">We offer private lessons to help you improve your Spanish. We will work through your textbook and curriculum, focusing on grammar and phonetics.</p>
                    <p class="para">We will share our background experience to prepare you for oral and writing tests.</p>
                    <p class="para">For prices and scheduling, <a href="contact.php">contact us</a>.</p>
                </div>
				<div class="clearfix"></div>
			</div>
			<div class="technology_list1">
				<div class="col-md-2 images_1_of_4 bg1">
					<span class="bg"><img src="web/images/schools-icon2.png" alt="Schools Program" height="80" width="80" style="margin-top:10%"></span>
				</div>
				<div class="col-md-10 tech_para">
				    <h4>Spanish Programs for Schools</h4>
					<p class="para">Speaking and listening skills are emphasized in all Spanish classes as students learn to count to 20, 50, 100 and more. These lessons focus on basic greetings, colors, letters, numbers, shapes, seasons, weather and other topics.</p>
				    <p class="para">Cultural lessons are integrated into each instruction. Songs, games, visuals, art and writing projects make the language as tangible as possible. Class is conducted almost exclusively in Spanish and relies on teacher created materials.</p>
                    <p class="para">We are currently offering our Spanish Programs at:</p>
                    <ul class="para">
                        <li>Early Learning Center at Snoqualmie Ridge, WA</li>
                        <li>Mt. Si Montessori at North Bend, WA</li>
                        <li>North Bend Montessori at North Bend, WA</li>
                        <li>Si View at North Bend, WA</li>
                        <li>Morning Star Montessori at Snoqualmie, WA</li>
                        <li>Lifelong Early Learning Center at Snoqualmie, WA</li>
                    </ul>
                    <p class="para">For prices and scheduling, <a href="contact.php">contact us</a>.</p>
                </div>
				<div class="clearfix"></div>
			</div>
			<div class="technology_list1">
				<div class="col-md-2 images_1_of_4 bg1">
					<span class="bg"><img src="web/images/adults-icon2.png" alt="Adults Program" height="80" width="80" style="margin-top:18%"></span>
				</div>
				<div class="col-md-10 tech_para">
				    <h4>Spanish Lessons for Adults</h4>
					<p class="para">It's never too late to learn a new language. If you are interested in studying Spanish, we can design a personal curriculum to fit your need. We also offer programs by levels: beginners, intermediate, advance, conversational and reading.</p>
				    <p class="para">If you are planning on traveling to a Spanish speaking country and want to communicate with proper and effective vocabulary, Spanish for travelers is the program for you. We will teach everything you need to know when you encounter common situations while traveling.</p>
                    <p class="para">Do you need to learn a more technical Spanish for work? Let us know your field and we will structure a personalized lesson plan for you.</p>
                    <p class="para">We also teach Spanish for doctors and nurses, teachers, lawyers, journalists and writers.</p>
                    <p class="para">For prices and scheduling, <a href="contact.php">contact us</a>.</p>
                </div>
				<div class="clearfix"></div>
			</div>
			<div class="technology_list2">
				<div class="col-md-2 images_1_of_4 bg1">
					<span class="bg"><img src="web/images/businesses-icon.png" alt="Businesses Program" height="80" width="80" style="margin-top:18%"></span>
				</div>
				<div class="col-md-10 tech_para">
				    <h4>Spanish Lessons for Businesses</h4>
					<p class="para">If you have your own business and would like your staff to be fluent in Spanish (Write and speak), we can design a program to fit the needs of your field. This opportunity is ideal for School Staff and International Companies.</p>
				    <p class="para">Areas that we can focus on:</p>
                    <ul class="para">
                        <li>Educational</li>
                        <li>Hospitality</li>
                        <li>Medical</li>
                        <li>Social workers</li>
                    </ul>
                    <p class="para">For prices and scheduling, <a href="contact.php">contact us</a>.</p>
                </div>
				<div class="clearfix"></div>
			</div>-->
			<!--<ul class="pagination">
			  <li><a href="#">&laquo;</a></li>
			  <li><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			  <li><a href="#">&raquo;</a></li>
			</ul>
			<div class="alert alert-warning alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  <strong>Warning!</strong> Better check yourself, you're not looking too good.
			</div>-->
		</div>
	</div>	
	</div>
</div><!-- end main -->
<?= my_footer() ?>
</body>
</html>