<!DOCTYPE html>

<html>
<head>
    <title>Best Offer Books</title>
    <link rel="stylesheet" type="text/css" href="css/desktop.css" />
	<link rel="stylesheet" type="text/css" href="css/product.css" />
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
		<?php
		
		require_once("config/db.php");
		include_once 'includes/dbconnect.php';
		$id = $_REQUEST['id'];
		$result = mysqli_query($con,"SELECT title, cost, isbn, book_cond, seller_id, first, last
						FROM books
						JOIN users
						ON seller_id = users.user_id
						WHERE book_id = '" . $id . "';");
		
		
		if($row = mysqli_fetch_array($result, MYSQLI_NUM))
		{
			// This can be enabled to make sure SQL is running when the page starts
			?>
			<script>alert("SQL ran successfully")</script>
			<?php
		}
		else
		{
			?>
			<script>alert("There was an error getting the book")</script>
			<?php
		}
		/*
        if (empty($_GET['id'])) {
            echo "No book specified.";
        } elseif (!empty($_GET['id']) && is_numeric($_GET['id'])) {
			
			//$db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

			if (!$con->set_charset("utf8")) {
				echo $con->error;
			}

			if ($con->connect_errno) {

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
				}
			} else {
				echo "Database connection problem.";
				echo $con->error;
				echo mysqli_connect_error();
			}
		} */
		?>
		
        <!-- MAIN CONTENT -->
        <div id="main-content">
            <div id="left-content">
				
                <div id="product">
                    <div class="productImage">
						<!-- http://blogs.spanishpod101.com/blog/2011/12/30/spanish-word-of-the-day-textbook-phrase/ -->
						<img src="images/example_book.jpg" alt="Example Book" height="250" width="250" />
					</div>
					<div class="productInfo">
						<h1 id="bookTitle"><?php echo $row[0]; ?></h1>
						<p>
							<span id="label">Price:</span> $<?php echo $row[1]; ?><br />
							<span id="label">ISBN:</span> <?php echo $row[2]; ?><br />
							<span id="label">Condition:</span> <?php echo $row[3]; ?><br />
							<br />
							<span id="label">Seller:</span> <?php echo $row[5] . ' ' . $row[6]; ?><br />
						</p>
					</div>
                </div>
				<div id="related">
                    <h1 style="border-bottom: solid thin black;">Related</h1>
					<h2>A Placeholder</h2> 
					<p>
						Fusce faucibus ante ut lectus aliquet, nec pharetra quam pulvinar. Aliquam vestibulum massa volutpat dui tincidunt, vitae congue arcu vehicula.
					</p>
					<h2>A Paperweight</h2> 
					<p>
						Fusce faucibus ante ut lectus aliquet, nec pharetra quam pulvinar. Aliquam vestibulum massa volutpat dui tincidunt, vitae congue arcu vehicula.
					</p>
					<h2>A Capybara</h2> 
					<p>
						Fusce faucibus ante ut lectus aliquet, nec pharetra quam pulvinar. Aliquam vestibulum massa volutpat dui tincidunt, vitae congue arcu vehicula.
					</p>
                </div>
				<div id="bookDescription">
					<h1>Book Description</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo sapien dolor, et viverra tellus mollis in. Duis ullamcorper ultrices eleifend. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi vitae pulvinar nisl, non congue nulla. In fermentum arcu id purus tempor, eu auctor nunc auctor. Praesent sit amet consectetur augue, in maximus erat. Nullam in lobortis leo. In mollis id lectus at commodo. Suspendisse placerat semper dolor, nec feugiat risus vehicula id. Cras dignissim diam ac nulla ornare euismod. Nam ac dolor porttitor, maximus elit placerat, aliquam dolor. 
					</p>
				</div>
                <div id="sellerNotes">
					<h1>Seller's Notes</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo sapien dolor, et viverra tellus mollis in. Duis ullamcorper ultrices eleifend. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi vitae pulvinar nisl, non congue nulla. In fermentum arcu id purus tempor, eu auctor nunc auctor. Praesent sit amet consectetur augue, in maximus erat. Nullam in lobortis leo. In mollis id lectus at commodo. Suspendisse placerat semper dolor, nec feugiat risus vehicula id. Cras dignissim diam ac nulla ornare euismod. Nam ac dolor porttitor, maximus elit placerat, aliquam dolor. 
					</p>
				</div>
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
