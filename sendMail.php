<?php
	if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$email = $_POST['mail'];
			$message = $_POST['msg'];

			$to = 'sanjushe15@gmail.com';
			$mail_sub = 'Message from website';
			$mail_body = "<b>FROM:</b> {$name}<br>";
			$mail_body = "<b>MESSAGE:</b> {$message}<br>";
			
			$header = "FROM: {$email} \r\n Content-type: text/html;";
			
			$result = mail($to,$mail_sub,$mail_body,$header);
			
			if($result)
			{
				echo "<script>alert ('Email sent successfully'); window.location.replace('contact.php');</script>";
			}
			else
			{
				echo "<script>alert ('Email not sent'); window.location.replace('contact.php');</script>";
		}}
?>