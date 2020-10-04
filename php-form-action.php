<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 
	include_once('mail.php');
	include_once('mail_mine/mine.php');
	$message=new mail_mine();
	$message->setTXTBody($text);
	$message->addAttachment($path_of_uploadfile);
	$body=$message->get();
	$extraheaders=array("From"=>$from,"subject"=>$subject,"Reply-To"=$visitor_email);
	$headers=$message->headers($sextraheaders);
	$mail=mail::factory("mail");
	$mail->send($to.$headers,$body)
	 ?>
</body>
</html>