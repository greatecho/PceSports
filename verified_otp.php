<?php
	require 'db_connect.php';

	var_dump($_POST);exit();

	$mail = $_POST["email"];
	$otp_enter = $_POST["otp"];

	$sql = "SELECT otp FROM users WHERE email = '$email'";

	 if($result = $conn->query($sql)){
	 	if ($result->num_rows > 0) {
	 	    // output data of each row
	 	    while($row = $result->fetch_assoc()) {
	 	        if ($row["otp"] == $otp_enter) {
	 				var_dump($_SESSION);exit();
	 	        	header("Location: login.php");
	 	        } else{
	 	        	echo "Incorrect otp";
	 	        }
	 	    }
	 	} else {
	 	    echo "Incorrect email";
	 	}
	 } else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }
header("Location: login.php")
?>
