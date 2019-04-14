<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	try{
	
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
     $msg = "FirstName: " . $fname . "\n";
     $msg = $msg .  "LastName: " . $lname . "\n";
     $msg = $msg . "Email:" . $email . "\n";
     $msg = $msg . "Message:" . $message . "\n";

	// send email
	mail("contact@morrisprogramming.com",$subject,$msg);
	}catch(Exception $e) {
	  $msg = "An error occurred whilst sending an email from your contact page. The email was from:" . $_POST["email"] . ".\n";
	  mail("contact@morrisprogramming.com","Error sending Email",$msg);
	}
}
?>