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
<?php   echo my_header('services'); ?>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="technology row">
			<h2>Lessons</h2>
			<div class="technology_list">
				<div class="col-md-2 images_1_of_4 bg1">
					<span class="bg"><img src="web/images/kids-icon1.png" alt="Kids Program" height="80" width="80" style="margin-top:18%"></span>
				</div>
                <div class="col-md-10 tech_para">
			 	   <h4>Kids</h4>
					<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			     <div class="clearfix"></div>
			</div>
			<div class="technology_list1">
				<div class="col-md-2 images_1_of_4 bg1">
				    <span class="bg"><img src="web/images/adults-icon7.png" alt="Tutoring Program" height="80" width="80" style="margin-top:18%"></span>
				</div>
                <div class="col-md-10 tech_para">
				    <h4>Tutoring</h4>
					<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="technology_list1">
				<div class="col-md-2 images_1_of_4 bg1">
					<span class="bg"><img src="web/images/schools-icon2.png" alt="Schools Program" height="80" width="80" style="margin-top:10%"></span>
				</div>
				<div class="col-md-10 tech_para">
				    <h4>Schools</h4>
					<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="technology_list1">
				<div class="col-md-2 images_1_of_4 bg1">
					<span class="bg"><img src="web/images/adults-icon2.png" alt="Adults Program" height="80" width="80" style="margin-top:18%"></span>
				</div>
				<div class="col-md-10 tech_para">
				    <h4>Adults</h4>
					<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="technology_list2">
				<div class="col-md-2 images_1_of_4 bg1">
					<span class="bg"><img src="web/images/businesses-icon.png" alt="Businesses Program" height="80" width="80" style="margin-top:18%"></span>
				</div>
				<div class="col-md-10 tech_para">
				    <h4>Businesses</h4>
					<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="clearfix"></div>
			</div>
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