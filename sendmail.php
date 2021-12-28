<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpMailer/src/Exception.php';
	require 'phpMailer/src/PHPMailer.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language');
	$mail->IsHTML(true); 

	$mail->setFrom('jojo19940619@gmail.com', 'Customer')
	$mail->addAddress('beqa.basiladze1994@gmail.com');
	$mail->Subject = 'Hello, Its new cusstomer!';

	$gender = "Male";
	if($_POST['gender'] == "Female"){
		$gender = "Female";
	}
	else if($_POST['gender'] == "Other"){
		$gender = "Other";
	}

	$body = '<h1>New message just arrived!</h1>';

	if(trim(!empty($_POST['name']))){
		$body.='<p><strong>Name:</strong> '.$_POST['name'].'</p>';
	}
	if(trim(!empty($_POST['email']))){
		$body.='<p><strong>E-Mail:</strong> '.$_POST['email'].'</p>';
	}
	if(trim(!empty($_POST['gender']))){
		$body.='<p><strong>Gender:</strong> '.$_POST['gender'].'</p>';
	}
	if(trim(!empty($_POST['message']))){
		$body.='<p><strong>Message:</strong> '.$_POST['message'].'</p>';
	}

	$mail->Body =$body;

	if(!$mail->send()){
		$message = 'Error';
	}
	else{
		$message = 'Message sended!'
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
?>