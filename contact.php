<!DOCTYPE html>

<html>
<head>
    <title>Best Offer Books</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css" />
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
		<li><a href="profile.html">Profile</a></li>
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
                <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
					<div class="row">
						<label for="name">Your name:</label><br />
						<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
					</div>
					<div class="row">
						<label for="email">Your email:</label><br />
						<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
					</div>
					<div class="row">
						<label for="message">Your message:</label><br />
						<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
					</div>
					<input id="submit_button" type="submit" value="Send email" />
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