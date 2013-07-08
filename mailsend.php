<?php
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
		$msg ="A new message from: " . $_POST[name] ."<br />" . $_POST['message'];
		$to =  $_POST['contact_email']; 
		$subject = $_POST['subject']; 
		$from = $_POST['email'];
		$headers  = "From: $from\r\n" ; 
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		$headers .= "X-Mailer: PHP" . phpversion(); 
		if (@mail($to, $subject, $msg, $headers)){
			echo "true";
		}else{
			echo "false";
		}
	}else{
		die();
	}
?>