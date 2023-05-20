<?php  
class MailPHPMailer {

	public $debug;
	public $host;
	public $protocal;
	public $username;
	public $password;
	public $port;
	public $form;
	public $sender;
	public $recipient;
	public $reply;
	public $to;
	public $html;
	public $subject;

	public function __construct() {
		$this->debug = 0;
		$this->port = 465;
		$this->protocal = 'ssl';
		$this->host = 'ssl://smtp.gmail.com';
		// $this->subject = 'Send mail';
	}

	public function send() {
		/**
		* This example shows making an SMTP connection without using authentication.
		*/
		//Import the PHPMailer class into the global namespace
		require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer-master/vendor/autoload.php';
		require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer-master/vendor/phpmailer/phpmailer/src/PHPMailer.php';
		require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer-master/vendor/phpmailer/phpmailer/src/SMTP.php';
		require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer-master/vendor/phpmailer/phpmailer/src/Exception.php';
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
		$mail->SMTPDebug = $this->debug;
		//Set the hostname of the mail server
		$mail->Host = $this->host;
		$mail->SMTPSecure = $this->protocal;
		//Set the SMTP port number - likely to be 25, 465 or 587
		$mail->Port = $this->port;
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		//Username to use for SMTP authentication
		$mail->Username = $this->username;
		//Password to use for SMTP authentication
		$mail->Password = $this->password;
		//Set who the message is to be sent from
		$mail->setFrom($this->form, $this->sender);
		//Set an alternative reply-to address
		$mail->addReplyTo($this->reply, $this->sender);
		//Set who the message is to be sent to
		$mail->addAddress($this->to, $this->recipient);
		//Set the subject line
		$mail->Subject = $this->subject;
		$body = $this->html;
		$mail->MsgHTML($body); 
		// $mail->AltBody = 'This is a plain-text message body';
		//Attach an image file
		// $mail->addAttachment('images/phpmailer_mini.png');
		//send the message, check for errors
		if (!$mail->send()) {
			// echo $this->debug==2?'<span style="color:red;">Mailer Error</span>: ' . $mail->ErrorInfo : false;
		} else {
			// echo $this->debug==2?'<span style="color:green;">Message sent!</span>' : true;
		}
	}
}
?>