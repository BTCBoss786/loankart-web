<?php
// require_once("init.php");

$errors = [];
$data = [];

if ($_POST) {
	extract($_POST);
	filter_var($nlEmail, FILTER_SANITIZE_EMAIL);
	if (!filter_var($nlEmail, FILTER_VALIDATE_EMAIL)) {
		$errors["Email"] = "Please Enter valid Email Address.";
	} else {
		/*
		$stmt = $db->prepare("SELECT `emailId` FROM `NewsLetters` WHERE `emailId` = :nlEmail");
		$stmt->bindParam(":nlEmail", $nlEmail);
		$stmt->execute();
		if ($stmt->rowCount()) {
		$errors["emailExists"] = "This Email has already been registered with our Newsletter.";
		*/
		$myFile = fopen("newsletterData.txt","r");
		while (!feof($myFile)) {
			$alreadyEmails[] = fgets($myFile);
		}
		fclose($myFile);
		array_pop($alreadyEmails);
		foreach ($alreadyEmails as $alreadyEmail) {
			if ($alreadyEmail == $nlEmail."\r\n") {
				$errors["emailExists"] = "This Email has already been registered with our Newsletter.";
			}
		}
	}

	if (empty($errors)) {
		/*
		$stmt = $db->prepare("INSERT INTO `NewsLetters` (emailId) VALUES (:nlEmail)");
		$stmt->bindParam(":nlEmail", $nlEmail);
		$stmt->execute();
		if ($stmt->rowCount()) {
		*/
		$myFile = fopen("newsletterData.txt","a");
		fwrite($myFile, $nlEmail."\r\n");
		fclose($myFile);
		$data["status"] = true;
		$data["message"] = "Your Email has been added for our newsletter Successfully.";
		echo json_encode($data);
		$headers = "From: LoanKart Newsletter <loankart.bo@gmail.com>\r\n";
		$headers .= "Reply-To: loankart.bo@gmail.com\r\n";
		$headers .= "Content-type: text/html\r\n";
		$mailSend = mail($nlEmail, "LoanKart Newsletter", "<h3>Thanks for registering with our Newsletter.</h3>\r\n", $headers);
	} else {
		$data["status"] = false;
		$data["message"] = $errors;
		echo json_encode($data);
	}

} else {
	header("Location: ../index.php");
}
