<?php

	// var_dump($_POST);exit();
	include 'db_connect.php';

	$stmt = $conn->prepare("INSERT INTO admin (first_name, last_name, mobile, email, password) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $first_name, $last_name, $mobile, $email, $password);


	$first_name = $_POST["fname"];
	$last_name = $_POST["lname"];
	$mobile = $_POST["mob"];
	$email = $_POST["email"];
	$password = $_POST["psw"];

	$stmt->execute();
	$stmt->close();

	$conn->close();
 
	header("Location: index.php");

?>