<?php
session_start();
include_once 'includes/dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$email = mysqli_real_escape_string($con, $_POST['email']);
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $lname = mysqli_real_escape_string($con, $_POST['lname']);
	$upass = md5(mysqli_real_escape_string($con, $_POST['pass']));
	
	if(mysqli_query($con, "INSERT INTO users(email,first,last,password) VALUES('$email','$fname','$lname','$upass')"))
	{
		?>
        <script>alert('You successfully registered ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('There was an error while registering you...');</script>
        <?php
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Best Offer Books</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
	  padding: 5%;
    }
     
     .jumbotron {
      margin-bottom: 80px;
    }
   
    footer {
	  background-color: #f2f2f2;
      padding: 25px;
    }
	
	li a {
		font-size: 30pt;
		margin-top: 30px;
	}
	
	img{
		margin-right: 50px;
	}
	
	.carousel-inner{
		width: 100%;
		height: 350px;
	}
	
	@media (max-width: 1300px) {
    .navbar-header {
        float: none;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
        margin: 7.5px -15px;
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .navbar-text {
        float: none;
        margin: 15px 0;
    }
    /* since 3.1.0 */
    .navbar-collapse.collapse.in { 
        display: block!important;
    }
    .collapsing {
        overflow: hidden!important;
    }
	.navbar-collapse.collapse.in { display: block!important; }
}
  </style>
</head>
<body>

<?php
include_once('header.php');
?>


		<div class="container">

		  <form class="form-signin" method="post">
			<h2 class="form-signin-heading">Please Register</h2><br><br><br>
			<label for="email">Email:</label>
			<input type="email" name="email" class="form-control" placeholder="Your email" required />
			<label for="name">First Name:</label>
			<input type="text" name="fname" class="form-control" placeholder="Your first name" required />
			<label for="name">Last Name:</label>
			<input type="text" name="lname" class="form-control" placeholder="Your last name" required />
			<label for="password">Password:</label>
			<input type="password" name="pass" class="form-control" placeholder="Your password" required />
			
			<button class="btn btn-lg btn-primary btn-block" name="btn-signup" type="submit">Sign Up</button>
		  </form>
		  <a href="register.php">Already a member? Sign In Here</a>
		</div> <!-- /container -->

</body>

</html>