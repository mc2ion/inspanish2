<?php 
include "app/config.php";
include "app/detect.php";

if ($page_name=='' || $page_name=='index.php') {
	include $browser_t.'/index.php';
	}
elseif ($page_name=='' || $page_name=='index2.php') {
	include $browser_t.'/index2.php';
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
elseif (strpos($page_name, "contact.php") === 0) {
	include $browser_t.'/contact.php';
	}
elseif ($page_name=='_ext/actions.php') {
	include $browser_t.'/_ext/actions.php';
	}
elseif ($page_name=='_ext/mail.php') {
	include $browser_t.'/_ext/mail.php';
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
