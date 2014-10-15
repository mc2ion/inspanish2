<?php

/**
 * @author LeaseMove.ca
 * @copyright 2014
 */

function my_header($section=''){
    $out = '<div class="container">
        	<div class="row header">
                <div class="header_bg1">
        		  <div class="logo navbar-left">
        			<h1><a href="index.php"><img class="img-logo" src="web/images/logo.png" alt="In Spanish"/> </a></h1>
        		  </div>
        	   </div>
            </div>
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">';
              $class = ""; if ($section == "index") $class = "class = 'active'";
	          $out .= "<li {$class}><a href=\"index.php\">Home</a></li>";
		      $class = ""; if ($section == "about") $class = "class = 'active'";
		      $out .=  "<li {$class}><a href=\"about.php\">About Us</a></li>";
		      $class = ""; if ($section == "services") $class = "class = 'active'";
		      $out .=  "<li {$class}><a href=\"services.php\">Services</a></li>";
		      $class = ""; if ($section == "contact") $class = "class = 'active'";
              $out .=  "<li {$class}><a href=\"contact.php\">Contact Us</a></li>";
		      $out .= '</ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			</ul>	
		</div>
	</div>
	<div class="clearfix"></div>
</div>';
    return $out;
}

function my_footer(){
    $out = "<div class=\"footer_bg\"><!-- start footer -->
        	<div class=\"container\">
        		<div class=\"row  footer\">
        			<div class=\"copy text-center\">
        				<p class=\"link\"><span>&#169; All rights reserved | In Spanish</span></p>
        			</div>
        		</div>
        	</div>
        </div>";
    return $out;
}

?>