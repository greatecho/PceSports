<?php

	include 'db_connect.php';

	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO contact (name, email, subject) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $name, $email, $subject);	

	// set parameters and execute
	$name = $_POST["name"];
	$address = $_POST["adr"];
	$email = $_POST["email"];
	$subject = $_POST["sub"];

	$stmt->execute();
	$message = "Successful!";
	echo "<script>alert('$message');</script>";

	$stmt->close();
	$conn->close();
 
	header("Location: index.php");

?>



