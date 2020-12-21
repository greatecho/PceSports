<?php
	$mail = $_POST["email"];
	$pass = $_POST["psw"];

	require 'db_connect.php';

	$sql = "SELECT first_name, last_name, email, password FROM users WHERE email = '$mail'";
	if($result = $conn->query($sql)){
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        if ($row["password"] == $pass) {
		        	session_start();
		        	$admin_name = $row["first_name"]." ".$row["last_name"];
		        	$_SESSION["name"] = $admin_name;
					// var_dump($_SESSION);exit();
		        	header("Location: homepage.php");
		        } else{
		        	echo "Incorrect password";
		        }
		    }
		} else {
		    echo "Incorrect email";
		}
	} else{
    	echo "ERROR: Could not able to execute $sql. " . $conn->error;
	}

	$conn->close();

?>
