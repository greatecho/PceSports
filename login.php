<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login Portal</title>

		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


        <style type="text/css">

	        #footer {
	                position: relative;
	                margin-top: 140px;
	                bottom:0;
	                width:100%;
	                height:57px;  /* Height of the footer */
	        }

        </style>


	</head>
	<body>

		<!-- header -->

        <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">

            <a class="navbar-brand" href="index.php">
                <img class="img-fluid bg-light rounded" src="media/image.jpg" width="60px">
            </a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact_us.php">Contact Us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php">Signup</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid mt-3">

			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#user">User</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#admin">Admin</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div id="user" class="container tab-pane active"><br>
					<h3 class="text-center">User Login</h3>
					<div class="container p-5 text-center col-6">

		                <form name="login_form" action="validate_user.php" method="post">
		                    <div class="form-group">
		                        <label for="email">Email</label>
		                        <input class="form-control" type="email" id="email" placeholder="Enter email" name="email" required>
		                    </div>
		                    <div class="form-group">
		                        <label for="pswd">Password</label>
		                        <input class="form-control" type="password" id="pswd" placeholder="Enter password" name="psw" required>
		                    </div>
		                    <!-- <div class="form-group form-check">
		                        <label class="form-check-label">
		                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
		                        </label>
		                    </div> -->
												<button type="submit" class="btn btn-outline-dark btn-md">Login</button>
		                </form>
		                <br>
	            		<p class="font-weight-light text-center" style="font-size: 17px;"><small>Not an User?</small> <b><i><a href="signin.php">Sign-up</a></i></b></p>


		            </div>

				</div>


				<div id="admin" class="container tab-pane fade"><br>
					<h3 class="text-center">Admin Login</h3>
					<div class="container p-5 text-center col-6">

		                <form name="login_form" action="validate_admin.php" method="post">
		                    <div class="form-group">
		                        <label for="email">Email</label>
		                        <input class="form-control" type="email" id="email" placeholder="Enter email" name="email" required>
		                    </div>
		                    <div class="form-group">
		                        <label for="pswd">Password</label>
		                        <input class="form-control" type="password" id="pswd" placeholder="Enter password" name="psw" required>
		                    </div>
		                    <!-- <div class="form-group form-check">
		                        <label class="form-check-label">
		                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
		                        </label>
		                    </div> -->
												<button type="submit" class="btn btn-outline-dark btn-md">Login</button>
		                </form>
		                <br>
	            		<p class="font-weight-light text-center" style="font-size: 17px;"><small>Admin</small> <b><i><a href="signin.php">Sign-up</a></i></b></p>

		            </div>
				</div>
			</div>
		</div>

		<?php include 'footer.php'; ?>

	</body>
</html>
