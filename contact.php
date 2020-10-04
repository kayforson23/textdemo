<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	if ($_POST["message"]){
		mail ("sammyforson6@outlook.com","form to email message",
			 $_POST["message"],"form:an@email.address");
	}
	?>
	<?php
	if($_POST["submit"]){
		$recipient="sammyforosn6@outlook.com";$subject="form to email message";
		$sender=$_POST["sneder"];
		
		$senderEmail=$_POST["senderEmail"];
		$message=$_POST["message"];
		
		
		$mailBody="name:
		$sender\nEmail:
		$senderEmail\n\n$message;
		
		mail($recipient,$subject,$mailBody,"from:$sender<$senderEmail");
		$thankyou="<p>thank you! your message has been sent.</p>";
			}
	?>
</body>
</html>