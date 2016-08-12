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
	
	unset($_POST['firstname']);
	unset($_POST['lastname']);
	unset($_POST['email']);
	unset($_POST['subject']);
	unset($_POST['message']);
	
	if (mail($to, $subject, $message, $headers)) {
		$return = "success";
	} else {
		$return = "error";
	}
	// $_SERVER['HTTP_HOST'] = localhost
	// $_SERVER['PHP_SELF'] = myhome/gdform.php
	// $_SERVER['REQUEST_URI'] = myhome/gdform.php
	// $_SERVER['HTTP_REFERER'] = http//localhost/myHome/
	$url = $_SERVER['HTTP_REFERER'] . "?result=";
	redirect_to($url . $return . "#contact");
} else {
	redirect_to("http://ABC.COM");
}
exit();
?>