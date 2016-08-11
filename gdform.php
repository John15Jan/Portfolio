<?php
function redirect_to($new_location) {
	header("Location: " . $new_location);
	exit();
}

// ------------------------------------------------------ //
//  Get the post data and initialize the data  //
// ------------------------------------------------------ //
if (isset($_POST['firstname']) 
	&& isset($_POST['lastname']) 
	&& isset($_POST['email']) 
	&& isset($_POST['subject']) 
	&& isset($_POST['message'])) {

	$to = "enq@ABC.COM"; 
    $subject = $_POST['subject']; 
    $message  = $_POST['message'];
	$message .= "\r\n\r\nSender: " . $_POST['firstname'] . ", " . $_POST['lastname'];
	$message .= "\r\nEmail: " . $_POST['email'];
	$headers = "From: " . $_POST['email'] .  "\r\n";
	
	if (mail($to, $subject, $message, $headers)) {
		$return = "success";
	} else {
		$return = "error";
	}
	$url = "http://ABC.COM/index.php?result=";
	redirect_to($url . $return);
	
	unset($_POST['firstname']);
	unset($_POST['lastname']);
	unset($_POST['email']);
	unset($_POST['subject']);
	unset($_POST['message']);
} else {
	redirect_to("http://ABC.COM");
}
exit();
?>