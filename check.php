<?php  
// phpinfo();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// mail('munk.gorn@gmail.com');


	// require_once 'PHPMailer-master/phpamiler/phpmailer/src/Exception.php';
	// require_once 'PHPMailer-master/phpmailer/phpmailer/src/PHPMailer.php';
	// require_once 'PHPMailer-master/phpamiler/phpmailer/src/SMTP.php';
// phpinfo();
smtp();

function smtp() {
	/**
	 * This example shows making an SMTP connection without using authentication.
	 */
	//Import the PHPMailer class into the global namespace
	require 'PHPMailer-master/vendor/autoload.php';
	require 'PHPMailer-master/vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require 'PHPMailer-master/vendor/phpmailer/phpmailer/src/SMTP.php';
	require 'PHPMailer-master/vendor/phpmailer/phpmailer/src/Exception.php';
	/**
	 * This example shows making an SMTP connection with authentication.
	 */
	//Import the PHPMailer class into the global namespace
	// use PHPMailer\PHPMailer\PHPMailer;
	//SMTP needs accurate times, and the PHP time zone MUST be set
	//This should be done in your php.ini, but this is how to do it if you don't have access to that
	date_default_timezone_set('Asia/Bangkok');
	//Create a new PHPMailer instance
	$mail = new PHPMailer\PHPMailer\PHPMailer(true);
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	$mail->CharSet     = "utf-8";
	$mail->Debugoutput = "html"; 
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 2;
	//Set the hostname of the mail server
	$mail->Host = 'ssl://smtp.gmail.com';
	$mail->SMTPSecure = 'ssl';
	//Set the SMTP port number - likely to be 25, 465 or 587
	$mail->Port = 465;
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	//Username to use for SMTP authentication
	$mail->Username = 'sportstownonline.div@ba-group.in.th';
	//Password to use for SMTP authentication
	$mail->Password = 'on8903797';
	//Set who the message is to be sent from
	$mail->setFrom('sportstownonline.div@ba-group.in.th', 'Admin');
	//Set an alternative reply-to address
	$mail->addReplyTo('sportstownonline.div@ba-group.in.th', 'Admin');
	//Set who the message is to be sent to
	$mail->addAddress('munk.gorn@gmail.com', 'Customer');
	//Set the subject line
	$mail->Subject = 'PHPMailer SMTP test';
	$body = 'Hello Word'.date('d-m-Y H:i:s',time());
	$mail->MsgHTML($body); 
	$mail->AltBody = 'This is a plain-text message body';
	//Attach an image file
	// $mail->addAttachment('images/phpmailer_mini.png');
	//send the message, check for errors
	if (!$mail->send()) {
	    echo '<span style="color:red;">Mailer Error</span>: ' . $mail->ErrorInfo;
	} else {
	    echo '<span style="color:green;">Message sent!</span>';
	}
}

function normalsendmail() {
	$to      = 'munk.gorn@gmail.com';
	$subject = 'the subject';
	$message = 'hello';
	$headers = 'From: webmaster@example.com' . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	if(mail($to, $subject, $message, $headers)) {
		echo 'send success';
	}
}
?>