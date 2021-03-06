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
			<h2 class="form-signin-heading">Enter Your Book's Information</h2><br><br><br>
			<label for="title">Title:</label>
			<input type="text" name="title" class="form-control" placeholder="Enter the Title" required />
			<label for="price">Price:</label>
			<input type="number" name="cost" class="form-control" placeholder="Enter the Price" required />
			<label for="isbn">ISBN:</label>
			<input type="text" name="isbn" class="form-control" placeholder="Enter the ISBN" required />
			<label for="condition">Condition:</label>
			<input type="text" name="condition" class="form-control" placeholder="What condition is the book in?" required />
			
			<button class="btn btn-lg btn-primary btn-block" name="btn-post-book" type="submit">Post Book For Sale</button>
		  </form>
		</div> <!-- /container -->
</body>
</html>