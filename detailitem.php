<?php
		
//require_once("config/db.php");
include_once 'includes/dbconnect.php';
	
if (empty($_GET['id'])) {
    echo "No book specified.";
		exit();
} elseif (!empty($_GET['id']) && is_numeric($_GET['id'])) {

		if (!$con->set_charset("utf8")) {
			echo $con->error;
		}
		

		if (!$con->connect_errno) {

			$id = $con->real_escape_string($_GET['id']);

			$sql = "SELECT title, cost, isbn, book_cond, seller_id, first, last
					FROM books
					JOIN users
					ON seller_id = users.user_id
					WHERE book_id = '" . $id . "';";
			$result_of_login_check = $con->query($sql);

			if ($result_of_login_check->num_rows == 1) {

				$result_row = $result_of_login_check->fetch_object();

				$title = $result_row->title;
				$cost = $result_row->cost;
				$isbn = $result_row->isbn;
				$book_cond = $result_row->book_cond;
				$first = $result_row->first;
				$last = $result_row->last;
			} else {
				echo "This book does not exist.";
				exit();
			}
		} else {
			echo "Database connection problem.";
			echo $con->error;
			echo mysqli_connect_error();
			exit();
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
      margin-bottom: 50px;
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
	
	.size{
		width: 50%;
	}
}
  </style>
</head>
<body>

<?php
include_once('header.php');
?>

	<div class="container">
		<div class="panel panel-default">
		  <div class="panel-heading"><h1>Book title:</h1></div>
		  <div class="panel-body">
			<h2><?php echo $title; ?></h2>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title">Book cost:</h3>
		  </div>
		  <div class="panel-body">
			<h2>$<?php echo $cost; ?></h2>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">Book condition:</div>
		  <div class="panel-body">
			<h2><?php echo strtoupper($book_cond); ?></h2>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title">ISBN:</h3>
		  </div>
		  <div class="panel-body">
			<h2><?php echo $isbn; ?></h2>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title">Seller:</h3>
		  </div>
		  <div class="panel-body">
			<h2><?php echo $first." ". $last; ?></h2>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title">Description:</h3>
		  </div>
		  <div class="panel-body">
			Bacon ipsum dolor amet pig beef kevin drumstick shank picanha. Doner turducken
			filet mignon ham hock ground round. Strip steak drumstick ball tip pastrami rump
			ground round capicola flank. Corned beef tenderloin turducken doner, venison
			picanha beef ribs tri-tip flank shank landjaeger pastrami leberkas. Doner tri-tip
			shoulder porchetta jowl kevin boudin salami sirloin prosciutto. Porchetta bresaola
			sausage beef meatloaf andouille tenderloin turducken. Pastrami jowl short ribs
			pancetta ham hock, flank tail meatball spare ribs filet mignon pork loin.
		  </div>
		</div>
		
	</div>

</body>
</html>