<?php 
include "app/config.php";
include "app/detect.php";

if ($page_name=='' || $page_name=='index.php') {
	include $browser_t.'/index.php';
	}
elseif ($page_name=='about.php') {
	include $browser_t.'/about.php';
	}
elseif ($page_name=='services.php') {
	include $browser_t.'/services.php';
	}
elseif ($page_name=='careers.php') {
	include $browser_t.'/careers.php';
	}
elseif ($page_name=='calendars.php') {
	include $browser_t.'/calendars.php';
	}
elseif ($page_name=='contact.php') {
	include $browser_t.'/contact.php';
	}
elseif ($page_name=='404.html') {
	include $browser_t.'/404.html';
	}
elseif ($page_name=='contact-post.html') {
	include 'app/contact.php';
	}
else
	{
		include $browser_t.'/404.html';
	}
?>
