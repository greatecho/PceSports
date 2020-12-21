<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Panel</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <style>
	table {
	    font-family: arial, sans-serif;
	    border-collapse: collapse;
	    width: 100%;
	}

	td, th {
	    border: 1px solid #dddddd;
	    text-align: left;
	    padding: 8px;
	}

	tr:nth-child(even) {
	    background-color: #dddddd;
	}
	</style>

</head>

<body>

    <!-- header -->

    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">

        <a class="navbar-brand" href="admin.php">
            <img class="img-fluid bg-light rounded" src="media/image.jpg" width="60px">
        </a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">Home</a>
                </li>

                <!-- Dropdown -->

                <li class="nav-item">
                    <a class="nav-link" href="viewsport.php">View Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.php">Contact Us</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <?php echo $_SESSION["name"]; ?></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <h2 class="font-weight-light text-center">User messages</h2>

    <br>

    <?php

		include 'db_connect.php';
		// Check connection
		if($conn === false){
		    die("ERROR: Could not connect. " . $conn->connect_error);
		}

		// Attempt select query execution
		$sql = "SELECT * FROM contact";
		if($result = $conn->query($sql)){
		    if($result->num_rows > 0){
		        echo "<table>";
		            echo "<tr>";
		                echo "<th>id</th>";
		                echo "<th>name</th>";
		                echo "<th>email</th>";
		                echo "<th>subject</th>";
		            echo "</tr>";
		        while($row = $result->fetch_array()){
		            echo "<tr>";
		                echo "<td>" . $row['contact_id'] . "</td>";
		                echo "<td>" . $row['name'] . "</td>";
		                echo "<td>" . $row['email'] . "</td>";
		                echo "<td>" . $row['subject'] . "</td>";
		            echo "</tr>";
		        }
		        echo "</table>";
		        // Free result set
		        $result->free();
		    } else{
		        echo "No records matching your query were found.";
		    }
		} else{
		    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
		}

		// Close connection
		$conn->close();
	?>

</body>
</html>
