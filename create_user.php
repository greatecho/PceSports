<?php

	require 'db_connect.php';


	 // Generate random number between 1000 and 5000 and assign it to a local variable.
// Example output: 4568
	// print_r("hi there!");exit();

	$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, address, gender, mobile, email, password, otp) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssssss", $first_name, $last_name, $address, $gender, $mobile, $email, $password, $otp);

	$first_name = $_POST["fname"];
	$last_name = $_POST["lname"];
	$address = $_POST["adr"];
	$gender = $_POST["opt"];
	$mobile = $_POST["mob"];
	$email = $_POST["email"];
	$password = $_POST["psw"];
	$otp = rand(1000,5000);
	// var_dump($_POST);exit();
	$stmt->execute();

	// send verification mail

	require_once('PHPMailer/PHPMailerAutoload.php');

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = '465';
	$mail->isHTML();
	$mail->Username = 'turesm456@student.mes.ac.in';
	$mail->Password = 'Password@789456123';
	$mail->SetFrom('no-reply@PCEsports.com');
	$mail->Subject = 'PCE Sports: Verify your email';
	$mail->Body = '
	Hi, thanks for signing up with us.

	OTP: '.$otp.'

	Please click on the below link to verify your email id with otp.
	Link: http://localhost/INTP/BangoBangoBango/verify_otp.php
	';

	$mail->AddAddress($email);

	$mail->Send();


	$stmt->close();
	$conn->close();

	echo "OTP has been sent to your mail";

?>
