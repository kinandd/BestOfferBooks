<?php
session_start();
include_once 'includes/dbconnect.php';

if(isset($_POST['btn-login']))
{
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$upass = mysqli_real_escape_string($con,$_POST['pass']);
	$res = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
	$row = mysqli_fetch_array($res);
	if (!$res)
	{
		printf("Error: %s\n", mysqli_error($con));
		exit();
	}
        if($row['password']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
                ?>
        <script>alert('Login successful');</script>
        <?php
            header("Location: index.php");
	}
	else
	{
		?>
        <script>alert('wrong details');</script>
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

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2><br><br><br>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="email" class="form-control" placeholder="Your username" required /><br><br><br>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required><br><br><br>
        
        <button class="btn btn-lg btn-primary btn-block" name="btn-login" type="submit">Sign in</button>
      </form>
	  <a href="register.php">Not a member? Sign Up Here</a>
    </div> <!-- /container -->

</body>

</html>