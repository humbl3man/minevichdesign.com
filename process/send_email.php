<?php
	require_once("../config.php");

	$response = "";

	if ($_SERVER['REQUEST_METHOD'] === "POST"){

		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		$email_body = "";
		$email_body .= "<h3>Inquiry from <strong>" . $name . "</strong>";
		$email_body .= "<p></strong><i>" . $message . "</i></strong></p>";

		$email_body_nohtml = "";
		$email_body_nohtml .= "Inquiry from " . $name;
		$email_body_nohtml .= $message;
	}

	else{
		$response .= "Something went wrong with the server script. Please try again.";
	}



require ROOT.'/lib/php/phpmailer/phpmailer_autoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'user@example.com';                 // SMTP username
// $mail->Password = 'secret';                           // SMTP password
// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'info@minevichdesign.com';
$mail->FromName = 'Work inquiry';
$mail->addAddress($email, $name);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo($email);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $name . " would like to get in touch.";
$mail->Body    = $email_body;
$mail->AltBody = $email_body_nohtml;

if(!$mail->send()) {
    $response .= 'Message could not be sent.';
    $response .= 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    $response .= 'Thanks for contacting me. I typically reply within 2-3 hours.';
}

echo "<h3>" . $response . "</h3>";