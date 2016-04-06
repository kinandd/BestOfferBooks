<?php
session_start();

include_once 'includes/dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: login.php");
}

if(isset($_POST['btn-post-book']))
{
        $seller_id = $_SESSION['user'];
        $title = mysqli_real_escape_string($con, $_POST['title']);
        $cost = mysqli_real_escape_string($con, $_POST['cost']);
        $isbn = mysqli_real_escape_string($con, $_POST['isbn']);
        $condition = mysqli_real_escape_string($con, $_POST['condition']);
	
	if(mysqli_query($con, "INSERT INTO books(title,cost,isbn,book_cond,seller_id) VALUES('$title','$cost','$isbn','$condition','$seller_id')"))
	{
		?>
        <script>alert('You successfully posted your book for sale! ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('There was an error while posting your book...');</script>
        <?php
	}
}
?>
<!DOCTYPE html>

<html>
<head>
    <title>Post a book | Best Offer Books</title>
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
                <li><a href="books.php">Buy</a></li>
                <li><a href="">Sell</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
		<li><a href="profile.php">Profile</a></li>
                <?php
                
                if(!isset($_SESSION['user']))
                {
                     echo "<li><a href='login.php'>Login</a></li></li>";                       
                }
                else
                {
                    echo "<li><a href='logout.php?logout'>Log out</a></li></li>";
                }
                ?>
                <li><input class="search-box" type="text" name="search" placeholder="Search..."></li>
            </ul>
        </nav>
        <!-- MAIN CONTENT DIV HOLDS NEWS FEED AND RECENT LISTINGS -->
        <div id="main-content">
            <div id="left-content">
                <form class="login-form" method="post"  name="login-form">
			<ul>
			    <li>
				<h2>Enter Book Details</h2>
			    </li>
			    <li>
				<label for="title">Title:</label>
				<input type="text" name="title" placeholder="Enter book title" required />
			    </li>
			    <li>
				<label for="cost">Price:</label>
				<input type="number" name="cost" placeholder="Enter price" required />
			    </li>
                             <li>
				<label for="isbn">ISBN:</label>
				<input type="text" name="isbn" placeholder="Enter the ISBN number" required />
			    </li>
			    <li>
				<label for="condition">Condition:</label>
				<input type="text" name="condition" placeholder="What condition is the book in?" required />
			    </li>
			    <li>
				<button class="submit" name="btn-post-book" type="submit">Post My Book</button>
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
