<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Signup Portal</title>

		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <style type="text/css">

	        #footer {
	                position: relative;
	                bottom:0;
	                width:100%;
	                height:57px;  /* Height of the footer */
	        }

        </style>

        <script>   // ajax script for email validation
        	$(document).ready(function()
        	{
        		$('input#email').keyup(function()
        		{

        			var email_val = $(this).val();

        			$.post('validate_email.php', { email:email_val }, function(data)
        			{
        				// alert(data);
        				if (data == "false")
        				{
        					$('span#show').text('   Invalid Email');
        					$('span#show').css({'color':'red'});
        					$('span#show').css({'font-size':'13px'});
        				}
        				else
        				{
        					$('span#show').text('   Success');
        					$('span#show').css({'color':'green'});
        					$('span#show').css({'font-size':'13px'});
        				}
        			});

        		});
        	});
        </script>

        <script>

        	function Submit_signin(){

        		// window.alert(5 + 6);return false;

        		var mobile = document.forms["signin_form"]["mob"].value;
        		var x = isNaN(mobile);


        		if (x === true || mobile.length < 10){		//if mobile number is not a number or less than 10
        			document.getElementById("alert_mob").innerHTML = "Invalid mobile number";
        			return false;
        		}else{
        			document.getElementById("alert_mob").style.display = "none";
        		}

        		var password = document.forms["signin_form"]["psw"].value;
        		var chk = document.forms["signin_form"]["chk_psw"].value;

        		if (password != chk){					// if password is not equal to confirm password
        			document.getElementById("alert_psw").innerHTML = "Passwords don't match";
        			return false;
        		}
        		else{
        			document.getElementById("alert_psw").style.display = "none";
        		}

        	}
			function admin_signin(){

    			// window.alert(5 + 6);return false;

        		var mobile = document.forms["admin_form"]["mob"].value;
        		var x = isNaN(mobile);


        		if (x === true || mobile.length < 10){		//if mobile number is not a number or less than 10
        			document.getElementById("mob-admin").innerHTML = "Invalid mobile number";
        			return false;
        		}else{
        			document.getElementById("mob_admin").style.display = "none";
        		}

        		var password = document.forms["admin_form"]["psw"].value;
        		var chk = document.forms["admin_form"]["chk_psw"].value;

        		if (password != chk){					// if password is not equal to confirm password
        			document.getElementById("psw_admin").innerHTML = "Passwords don't match";
        			return false;
        		}
        		else{
        			document.getElementById("psw_admin").style.display = "none";
        		}

        	}

        </script>

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
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item active">
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
					<h3 class="text-center">User Sign-Up</h3>
					<div class="container p-5">

		                <form name="signin_form" action="create_user.php" onsubmit="return Submit_signin()" method="post">
		                    <div class="row">
		                        <div class="col-sm">
		                            <div class="form-group">
		                                <label for="firstname">First Name</label>
		                                <input class="form-control" type="text" id="firstname" placeholder="Enter First name" name="fname" required>
		                            </div>
		                        </div>
		                        <div class="col-sm">
		                            <div class="form-group">
		                                <label for="lastname">Last Name</label>
		                                <input class="form-control" type="text" id="lastname" placeholder="Enter Last name" name="lname" required>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label for="address">Current Address</label>
		                        <input class="form-control" type="textarea" id="address" placeholder="Your current address" name="adr" required>
		                    </div>

		                    <div class="form-group">
		                        <label>Gender</label>
		                        <div class="custom-control custom-radio custom-control-inline">
		                            <input class="custom-control-input" type="radio" id="customRadio1" name="opt" value="male" checked>
		                            <label class="custom-control-label" for="customRadio1">Male</label>
		                        </div>
		                        <div class="custom-control custom-radio custom-control-inline">
		                            <input class="custom-control-input" type="radio" id="customRadio2" name="opt" value="female">
		                            <label class="custom-control-label" for="customRadio2">Female</label>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label for="mobile">Mobile Number</label>
		                        <input class="form-control" type="text" id="mobile" placeholder="Enter Mobile number" name="mob" required maxlength="10">
		                        <p class="font-italic" style="color: red; font-size: 13px;" id="alert_mob"></p>
		                    </div>

		                    <div class="form-group">
		                        <label for="email">Email</label><span class="font-italic" id="show"></span>
		                        <input class="form-control" type="email" id="email" placeholder="Enter Email address" name="email" required>

		                    </div>
		                    <div class="row">
		                        <div class="col-sm">

		                            <div class="form-group">
		                                <label for="pswd">Password</label>
		                                <input class="form-control" type="password" id="pswd" placeholder="Enter Password" name="psw" required>

		                            </div>
		                        </div>
		                        <div class="col-sm">

		                            <div class="form-group">
		                                <label for="pswd">Confirm Password</label>
		                                <input class="form-control" type="password" id="pswd" placeholder="Enter Password" name="chk_psw" required>
		                                <p class="font-italic" style="color: red; font-size: 13px;" id="alert_psw"></p>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="form-group form-check">
		                        <label class="form-check-label">
		                            <input class="form-check-input" type="checkbox" name="agree" checked required> I agree to all the terms and conditions.
		                        </label>
		                    </div>

												<button type="submit" class="btn btn btn-outline-dark btn-md">Sign-up</button>

		                </form>

		            	<p class="font-weight-light text-center" style="font-size: 17px;"><small>Already an user?</small> <b><i><a href="login.php">Login</a></i></b></p>


		            </div>

				</div>
				<div id="admin" class="container tab-pane fade"><br>
					<h3 class="text-center">Admin Sign-up</h3>
					<div class="container p-5">

		                <form name="admin_form" action="create_admin.php" onsubmit="return admin_signin()" method="post">
		                    <div class="row">
		                        <div class="col-sm">

		                            <div class="form-group">
		                                <label for="firstname">First Name</label>
		                                <input class="form-control" type="text" id="firstname" placeholder="Enter First name" name="fname" required>
		                            </div>
		                        </div>
		                        <div class="col-sm">

		                            <div class="form-group">
		                                <label for="lastname">Last Name</label>
		                                <input class="form-control" type="text" id="lastname" placeholder="Enter Last name" name="lname" required>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label for="address">Current Address</label>
		                        <input class="form-control" type="textarea" id="address" placeholder="Your current address" name="adr" required>
		                    </div>

		                    <div class="form-group">
		                        <label>Gender</label>
		                        <div class="custom-control custom-radio custom-control-inline">
		                            <input class="custom-control-input" type="radio" id="customRadio1" name="opt" value="male" checked>
		                            <label class="custom-control-label" for="customRadio1">Male</label>
		                        </div>
		                        <div class="custom-control custom-radio custom-control-inline">
		                            <input class="custom-control-input" type="radio" id="customRadio2" name="opt" value="female">
		                            <label class="custom-control-label" for="customRadio2">Female</label>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label for="mobile">Mobile Number</label>
		                        <input class="form-control" type="text" id="mobile" placeholder="Enter Mobile number" name="mob" required maxlength="10">
		                        <p class="font-italic" style="color: red; font-size: 13px;" id="mob-admin"></p>
		                    </div>

		                    <div class="form-group">
		                        <label for="email">Email</label>
		                        <input class="form-control" type="email" id="email" placeholder="Enter Email address" name="email" required>
		                    </div>
		                    <div class="row">
		                        <div class="col-sm">

		                            <div class="form-group">
		                                <label for="pswd">Password</label>
		                                <input class="form-control" type="password" id="pswd" placeholder="Enter Password" name="psw" required>
		                            </div>
		                        </div>
		                        <div class="col-sm">

		                            <div class="form-group">
		                                <label for="pswd">Confirm Password</label>
		                                <input class="form-control" type="password" id="pswd" placeholder="Enter Password" name="psw" required>
		                                <p class="font-italic" style="color: red; font-size: 13px;" id="psw_admin"></p>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="form-group form-check">
		                        <label class="form-check-label">
		                            <input class="form-check-input" type="checkbox" name="agree" checked required> I agree to all the terms and conditions.
		                        </label>
		                    </div>

		                    <button type="submit" class="btn btn-primary btn-block">Sign-in</button>

		                </form>

		            	<p class="font-weight-light text-center" style="font-size: 17px;"><small>Pre-Registerd Admins </small> <b><i><a href="login.php">Login Here</a></i></b></p>

		            </div>
				</div>
			</div>
		</div>

		<?php include 'footer.php'; ?>

	</body>
</html>
