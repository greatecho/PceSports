<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homepage</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/half-slider.css" rel="stylesheet">

  </head>
  <style type="text/css">

    #footer {
      position: relative;
      /*margin-top: 140px; */
      bottom:0;
      width:100%;
      height:57px;  /* Height of the footer */
    }
    h1{
      color:red;
      font-family:Arial;
    }
    p
    {
    color:blue;
    font-family:Arial;
    }
  </style>

  <body>

    <!-- header -->

        <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">



            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="homepage.php">Home</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="about_us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact_us">Contact Us</a>
                    </li>
                    <!-- Dropdown -->

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Hi, <?php echo $_SESSION["name"] ?></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php">Signup</a>
                    </li> -->
                </ul>
            </div>
        </nav>

    <header>

    </header>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <ul>
<li><b>1st rank:</b>10,000 rs</li>
<li><b>2nd rank:</b> 5,000 rs</li>
<li><b>3rd rank:</b> 3,000 rs</li>
            <b>Above prizes are for teams</b></br>
          </ul>
      <ul>
<li><b>1st rank:</b>3,000 rs</li>
<li><b>2nd rank:</b>2,000 rs</li>
<li><b>3rd rank:</b>1,000 rs</li>
</ul>
<a href="cricket.php" class="btn btn-info" role="button">Register for Cricket</a>
<a href="volleyball.php" class="btn btn-info" role="button">Register for Volleyball</a>
<a href="football.php" class="btn btn-info" role="button">Register for Football</a>






      </div>
    </section>

    <?php include 'footer.php'; ?>
  </body>

</html>
