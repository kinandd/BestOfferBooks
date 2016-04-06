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

<html>
<head>
    <title>Best Offer Books</title>
    <link rel="stylesheet" type="text/css" href="css/desktop.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
</head>

<body>
    <!-- DESKTOP WRAPPER BEGIN -->
    <div id="wrapper">
        <div id="header-images">
            <div id="header-left">
                <a href="index.php"><img src="images/bestofferbookslogo.png" width="225" height="113" alt="Best Offer Books logo"></a>
            </div>
            <div id="header-right">
                <img src="images/ad.png" width="728" height="90" alt="ad">
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="detailtem.php">Buy</a></li>
                <li><a href="">Sell</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
				<li><a href="profile.html">Profile</a></li>
                <li><form action="#"><input class="submit" type="submit" value="Log In"></form></li>
                <li><input class="search-box" type="text" name="search" placeholder="Search..."></li>
            </ul>
        </nav>
        <!-- MAIN CONTENT DIV HOLDS NEWS FEED AND RECENT LISTINGS -->
        <div id="main-content">
            <div id="left-content">
                <form class="login-form" method="post"  name="login-form">
			<ul>
			    <li>
				<h2>Login</h2>
			    </li>
			    <li>
				<label for="email">Email:</label>
				<input type="email" name="email" placeholder="Your email" required />
			    </li>
			    <li>
				<label for="name">First Name:</label>
				<input type="text" name="fname" placeholder="Your first name" required />
			    </li>
                             <li>
				<label for="name">Last Name:</label>
				<input type="text" name="lname" placeholder="Your last name" required />
			    </li>
			    <li>
				<label for="password">Password:</label>
				<input type="password" name="pass" placeholder="Your password" required />
			    </li>
			    <li>
				<button class="submit" name="btn-signup" type="submit">Sign Me Up</button>
			    </li>
			    <li>
				<a href="admin-login.php">Already a member? Sign In Here</a>
			    </li>
			</ul>
		</form>
            </div>
            <div id="right-ad">
                    <h1>AD</h1>
                    <br/>
                    <h1>AD</h1>
                    <br/>
                    <h1>AD</h1>
                    <br/>
                    <h1>AD</h1>
                    <br/>
                    <h1>AD</h1>
                    <br/>
                    <h1>AD</h1>
            </div>
        </div>
        
    </div>
    <!-- DESKTOP WRAPPER ENDS -->
</body>
</html>
