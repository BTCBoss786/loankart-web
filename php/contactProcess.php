<?php
require_once("init.php");

$errors = [];
$data = [];

if ($_POST) {
	extract($_POST);
	if (!empty($name)) {
		filter_var($name, FILTER_SANITIZE_STRING);
	} else {
		$errors["Name"] = "Name should not be Empty.";
	}
	if (!empty($subject)) {
		filter_var($subject, FILTER_SANITIZE_STRING);
	} else {
		$errors["Subject"] = "Subject should not be Empty.";
	}
	if (!empty($message)) {
		filter_var($message, FILTER_SANITIZE_STRING);
		$message = wordwrap($message, 70, "\r\n");
	} else {
		$errors["Message"] = "Message should not be Empty.";
	}
	filter_var($email, FILTER_SANITIZE_EMAIL);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors["Email"] = "Please Enter valid Email Address.";
	}

	if (empty($errors)) {
		$headers = "From: $name <$email>\r\n";
		$headers .= "Reply-To: $email\r\n";
		$headers .= "Content-type: text/html\r\n";
		$mailSend = mail("loankart.bo@gmail.com", $subject, $message, $headers);
		if ($mailSend) {
			$data["status"] = true;
			$data["message"] = "Mail has been Send Successfully. We will contact you soon.";
			echo json_encode($data);
		} else {
			$data["status"] = false;
			$data["message"] = "Failed to Send Mail.";
			echo json_encode($data);
		}
	} else {
		$data["status"] = false;
		$data["message"] = $errors;
		echo json_encode($data);
	}

} else {
	header("Location: ../index.php");
}
