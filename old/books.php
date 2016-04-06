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
                <li><a href="books.php">Buy</a></li>
                <li><a href="post-book.php">Sell</a></li>
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
		
        <!-- MAIN CONTENT -->
        <div id="main-content">
            <div id="left-content">
				<?php
		
		//require_once("config/db.php");
		include_once 'includes/dbconnect.php';
		
        

				$result = mysqli_query($con,"SELECT * FROM books ORDER by book_id");
					echo "<table>";
					while($test = mysqli_fetch_array($result))
					{
						$id=$test['book_id'];
						echo "<tr>";
						echo "<td> <a href ='detailtem.php?id=$id'>".$test['title']."</a></td>";
						echo "<td>$". $test['cost']. "</td>";

						
						echo "</tr>";

					}
					echo "</table>";
			
		?>
                
        </div>
    </div>
    <!-- DESKTOP WRAPPER ENDS -->
</body>
</html>