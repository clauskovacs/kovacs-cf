<?php

	/* get directory/file where the script was loaded */
	$url = (empty($_SERVER['HTTPS'])) ? 'http' : 'https';
	$url .= $_SERVER['HTTP_HOST'];
	$url .= $_SERVER['REQUEST_URI']; // $url enthält jetzt die komplette URL

	function getCurrentUrl()
	{
		return ((empty($_SERVER['HTTPS'])) ? 'http' : 'https') . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	}
	/* get directory/file where the script was loaded */

	function error_mail_response($mailtext)
	{
		$sender = "bug@spidersheep.at";
		$reciever = "claus@fstph.at";
		$subject = "error";

		$timestamp = time();
		$today_date = date("d.m.Y",$timestamp);
		$today_clock = date("H:i",$timestamp);
		$actual_dir = getCurrentUrl();

		$mailtext_new = "Script ".$actual_dir." caused an error \nDate: ".$today_date." - ".$today_clock."\n\n\nAdditional info:\n\n".$mailtext;

		mail($reciever, $subject, $mailtext_new, "From: $sender"); 
	}

	function info_mail_response($mailtext)
	{
		$sender = "info@spidersheep.at";
		$reciever = "claus@fstph.at";
		$subject = "info";

		$timestamp = time();
		$today_date = date("d.m.Y",$timestamp);
		$today_clock = date("H:i",$timestamp);
		$actual_dir = getCurrentUrl();

		$mailtext_new = "Script ".$actual_dir." done \nDate: ".$today_date." - ".$today_clock."\n\n\nAdditional info:\n\n".$mailtext;

		mail($reciever, $subject, $mailtext_new, "From: $sender"); 
	}


?>