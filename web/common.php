<?php

/**
 * @author LeaseMove.ca
 * @copyright 2014
 */

function my_header($section=''){
	$class = "header_bg1";
    $phraseclass = "phrase";
    
    if ($section == "index") {
        $class = "header_bg1_home";
        $phraseclass = "phrase_home";
    }
    
    $out = "<div class=\"container\">
        	<div class=\"row header\">
                <div class=\"{$class}\">
        		  <div class=\"logo navbar-left\">
        			<h1><a href=\"index.php\"><img class=\"img-logo\" src=\"web/images/inSpanish-250x200-2.png\" alt=\"In Spanish\"/> </a></h1>
        		  </div>
                  <div class=\"{$phraseclass} navbar-right\">
                    <ul id=\"phrases\">
        			 <li><h4>Welcome to a community of more than 200 thousand words and 350 million speakers.</h4></li>
        			 <li><h4>Bienvenidos a una comunidad de más de 200 mil palabras y 350 millones de hablantes.</h4></li>
                    </ul>
        		  </div>
        	   </div>
            </div>
	<div class=\"row h_menu\">
		<nav class=\"navbar navbar-default navbar-left\" role=\"navigation\">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class=\"navbar-header\">
		      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
		        <span class=\"sr-only\">Toggle navigation</span>
		        <span class=\"icon-bar\"></span>
		        <span class=\"icon-bar\"></span>
		        <span class=\"icon-bar\"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
		      <ul class=\"nav navbar-nav\">";
              $class = ""; if ($section == "index") $class = "class = 'active'";
	          $out .= "<li {$class}><a href=\"index.php\">Home</a></li>";
		      $class = ""; if ($section == "about") $class = "class = 'active'";
		      $out .=  "<li {$class}><a href=\"about.php\">About us</a></li>";
		      $class = ""; if ($section == "services") $class = "class = 'active'";
		      $out .=  "<li {$class}><a href=\"services.php?less=0\">Lessons</a></li>";
		      $class = ""; if ($section == "careers") $class = "class = 'active'";
		      $out .=  "<li {$class}><a href=\"careers.php\">Careers</a></li>";
		      $class = ""; if ($section == "contact") $class = "class = 'active'";
              $out .=  "<li {$class}><a href=\"contact.php\">Contact us</a></li>";
		      $out .= '</ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			</ul>	
		</div>
	</div>
	<div class="clearfix"></div>
</div>';
    return $out;
}

function my_footer($section=''){
	$class = "footer_bg"; if ($section == "index") $class = "footer_bg_home";
    $out = "<footer class=\"{$class}\"><!-- start footer -->
        	<div class=\"container\">
        		<div class=\"row  footer\">
        			<div class=\"copy text-center\">
        				<p class=\"link\"><span>&#169; All rights reserved | In Spanish Inc.</span></p>
        			</div>
        		</div>
        	</div>
        </footer>";
    return $out;
}

function my_title(){
	$out = "<title>In Spanish Inc.</title>
			<link rel=\"icon\" href=\"web/images/favicon.ico\"/>
			<link href=\"web/css/bootstrap.min.css?v=03\" rel='stylesheet' type='text/css' />
			<link href=\"web/css/bootstrap.css?v=03\" rel='stylesheet' type='text/css' />
			<link href=\"web/css/style.css?v=05\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />";
	return $out;
}

function my_lessons(){
    $lessonId  = $_GET['less'];
    $class = "hidden";
    if ($lessonId == 0 || $lessonId == 1) $class = "";
    $out = "<div class=\"technology_list {$class}\">
				<div class=\"col-md-2 images_1_of_4 bg1\">
					<span class=\"bg\"><img src=\"web/images/kids-icon1.png\" alt=\"Kids Program\" height=\"80\" width=\"80\" style=\"margin-top:18%\"></span>
				</div>
                <div class=\"col-md-10 tech_para\">
			 	   <h4>Spanish Lessons for Kids</h4>
					<p class=\"para\">Speaking and listening skills are emphasized in all Spanish classes as students learn to count to 20, 50, 100 and more. These lessons focus on basic greetings, colors, letters, numbers, shapes, seasons, weather and other topics.</p>
				    <p class=\"para\">Cultural lessons are integrated into each instruction. Songs, games, visuals, art and writing projects make the language as tangible as possible. Class is conducted almost exclusively in Spanish and relies on teacher created materials.</p>
                    <p class=\"para\">We are also running our Spanish Enrichment Program at the YMCA at Snoqualmie Ridge and the YMCA at Hazelwood, in New Castle.</p>
                    <p class=\"para\">We would love to give your children the opportunity to learn a new language and culture. We can create a custom curriculum to teach private lessons or group lessons. Let’s have fun learning Spanish!</p>
                    <p class=\"para\">For prices and scheduling, <a href=\"contact.php\">contact us</a>.</p>
                </div>
			     <div class=\"clearfix\"></div>
			</div>";
    if ($lessonId == 0 || $lessonId == 2) {$class = "";} else {$class = "hidden";};
	$out .= "<div class=\"technology_list1 {$class}\">
				<div class=\"col-md-2 images_1_of_4 bg1\">
				    <span class=\"bg\"><img src=\"web/images/adults-icon7.png\" alt=\"Tutoring Program\" height=\"80\" width=\"80\" style=\"margin-top:18%\"></span>
				</div>
                <div class=\"col-md-10 tech_para\">
				    <h4>Spanish Tutoring</h4>
					<p class=\"para\">Are you learning Spanish at school, and feel that you need some help with homework and tests?</p>
                    <p class=\"para\">We offer private lessons to help you improve your Spanish. We will work through your textbook and curriculum, focusing on grammar and phonetics.</p>
                    <p class=\"para\">We will share our background experience to prepare you for oral and writing tests.</p>
                    <p class=\"para\">For prices and scheduling, <a href=\"contact.php\">contact us</a>.</p>
                </div>
				<div class=\"clearfix\"></div>
			</div>";
     if ($lessonId == 0 || $lessonId == 3) {$class = "";} else {$class = "hidden";};
     $out .= "<div class=\"technology_list1 {$class}\">
				<div class=\"col-md-2 images_1_of_4 bg1\">
					<span class=\"bg\"><img src=\"web/images/schools-icon2.png\" alt=\"Schools Program\" height=\"80\" width=\"80\" style=\"margin-top:10%\"></span>
				</div>
				<div class=\"col-md-10 tech_para\">
				    <h4>Spanish Lessons for Schools</h4>
					<p class=\"para\">Speaking and listening skills are emphasized in all Spanish classes as students learn to count to 20, 50, 100 and more. These lessons focus on basic greetings, colors, letters, numbers, shapes, seasons, weather and other topics.</p>
				    <p class=\"para\">Cultural lessons are integrated into each instruction. Songs, games, visuals, art and writing projects make the language as tangible as possible. Class is conducted almost exclusively in Spanish and relies on teacher created materials.</p>
                    <p class=\"para\">We are currently offering our Spanish Programs at:</p>
                    <ul class=\"para\">
                        <li>Early Learning Center at Snoqualmie Ridge, WA</li>
                        <li>Mt. Si Montessori at North Bend, WA</li>
                        <li>North Bend Montessori at North Bend, WA</li>
                        <li>Si View at North Bend, WA</li>
                        <li>Morning Star Montessori at Snoqualmie, WA</li>
                        <li>Lifelong Early Learning Center at Snoqualmie, WA</li>
                    </ul>
                    <p class=\"para\">For prices and scheduling, <a href=\"contact.php\">contact us</a>.</p>
                </div>
				<div class=\"clearfix\"></div>
			</div>";
    if ($lessonId == 0 || $lessonId == 4) {$class = "";} else {$class = "hidden";};
    $out .= "<div class=\"technology_list1 {$class}\">
				<div class=\"col-md-2 images_1_of_4 bg1\">
					<span class=\"bg\"><img src=\"web/images/adults-icon2.png\" alt=\"Adults Program\" height=\"80\" width=\"80\" style=\"margin-top:18%\"></span>
				</div>
				<div class=\"col-md-10 tech_para\">
				    <h4>Spanish Lessons for Adults</h4>
					<p class=\"para\">It's never too late to learn a new language. If you are interested in studying Spanish, we can design a personal curriculum to fit your need. We also offer programs by levels: beginners, intermediate, advance, conversational and reading.</p>
				    <p class=\"para\">If you are planning on traveling to a Spanish speaking country and want to communicate with proper and effective vocabulary, Spanish for travelers is the program for you. We will teach everything you need to know when you encounter common situations while traveling.</p>
                    <p class=\"para\">Do you need to learn a more technical Spanish for work? Let us know your field and we will structure a personalized lesson plan for you.</p>
                    <p class=\"para\">We also teach Spanish for doctors and nurses, teachers, lawyers, journalists and writers.</p>
                    <p class=\"para\">For prices and scheduling, <a href=\"contact.php\">contact us</a>.</p>
                </div>
				<div class=\"clearfix\"></div>
			</div>";
    if ($lessonId == 0) {$class = "technology_list2";} else if($lessonId == 5) {$class = "technology_list1";} else {$class = "hidden";};
    $out .= "<div class=\"{$class}\">
				<div class=\"col-md-2 images_1_of_4 bg1\">
					<span class=\"bg\"><img src=\"web/images/businesses-icon.png\" alt=\"Businesses Program\" height=\"80\" width=\"80\" style=\"margin-top:18%\"></span>
				</div>
				<div class=\"col-md-10 tech_para\">
				    <h4>Spanish Lessons for Businesses</h4>
					<p class=\"para\">If you have your own business and would like your staff to be fluent in Spanish (Write and speak), we can design a program to fit the needs of your field. This opportunity is ideal for School Staff and International Companies.</p>
				    <p class=\"para\">Areas that we can focus on:</p>
                    <ul class=\"para\">
                        <li>Educational</li>
                        <li>Hospitality</li>
                        <li>Medical</li>
                        <li>Social workers</li>
                    </ul>
                    <p class=\"para\">For prices and scheduling, <a href=\"contact.php\">contact us</a>.</p>
                </div>
				<div class=\"clearfix\"></div>
			</div>";
    return $out;
}

?>