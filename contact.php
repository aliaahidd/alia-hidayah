<?php
if(!empty($_POST["Email"])) {
	$name = $_POST["Name"];
	$email = $_POST["Email"];
	$subject = $_POST["Subject"];
	$content = $_POST["Message"];

	$toEmail = "aliahidayah00@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "index.php";
?>
