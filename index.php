<?php
session_start();
echo $_SESSION['user'];
?>

<!DOCTYPE html>

<html>
<head>
    <title>Best Offer Books</title>
    <link rel="stylesheet" type="text/css" href="css/desktop.css" />
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
                <div id="recent">
                    <h2 class="box-heading" style="border-bottom: solid thin black;">Recent Listings</h2>
                    <div class="recent-outline">
                        <img src="images/example_book.jpg" width="50" height="50" style="margin-left: 20px; float: left;"/>
                        <h3 style="float: left; margin: 5px 0 0 28px;">The Book of the Derps</h3>
                        <p style="clear: both; margin-left: 100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo sapien dolor, et viverra tellus mollis in. Duis ullamcorper ultrices eleifend.</p>
                    </div>
                    <div class="recent-outline">
                        <img src="images/example_book.jpg" width="50" height="50" style="margin-left: 20px; float: left;"/>
                        <h3 style="float: left; margin: 5px 0 0 28px;">The Book of the Derps</h3>
                        <p style="clear: both; margin-left: 100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo sapien dolor, et viverra tellus mollis in. Duis ullamcorper ultrices eleifend.</p>
                    </div>
                    <div class="recent-outline">
                        <img src="images/example_book.jpg" width="50" height="50" style="margin-left: 20px; float: left;"/>
                        <h3 style="float: left; margin: 5px 0 0 28px;">The Book of the Derps</h3>
                        <p style="clear: both; margin-left: 100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo sapien dolor, et viverra tellus mollis in. Duis ullamcorper ultrices eleifend.</p>
                    </div>
                </div>
                <div id="newsfeed">
                    <h2 class="box-heading" style="border-bottom: solid thin black;">News</h2>
                    <div class="recent-outline">
                        <img src="images/example_book.jpg" width="50" height="50" style="margin-left: 20px; float: left;"/>
                        <h3 style="float: left; margin: 5px 0 0 28px;">The Book of the Derps hits #1!!!</h3>
                        <p style="clear: both; margin-left: 100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo sapien dolor, et viverra tellus mollis in. Duis ullamcorper ultrices eleifend.</p>
                    </div>
                    <div class="recent-outline">
                        <img src="images/example_book.jpg" width="50" height="50" style="margin-left: 20px; float: left;"/>
                        <h3 style="float: left; margin: 5px 0 0 28px;">TBOTD outsells Lord of the Rings</h3>
                        <p style="clear: both; margin-left: 100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo sapien dolor, et viverra tellus mollis in. Duis ullamcorper ultrices eleifend.</p>
                    </div>
                    <div class="recent-outline" >
                        <img src="images/example_book.jpg" width="50" height="50" style="margin-left: 20px; float: left;"/>
                        <h3 style="float: left; margin: 5px 0 0 28px;">TBOTD joins Opera's club</h3>
                        <p style="clear: both; margin-left: 100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo sapien dolor, et viverra tellus mollis in. Duis ullamcorper ultrices eleifend.</p>
                    </div>
                </div>
                <div id="featured" >
                    <h2 class="box-heading" style="border-bottom: solid thin black;">Featured</h2>
                    <div class="recent-outline" >
                        <img src="images/example_book.jpg" width="50" height="50" style="margin-left: 20px; float: left;"/>
                        <h3 style="float: left; margin: 5px 0 0 28px;">The Book of the Derps will officially join the Oprah Winrey Book Club</h3>
                        <p style="clear: both; margin-left: 100px; margin-right: 10px;">The Book that started out as the most widely-criticized book will now make a home
                        with the Oprah Winfrey Book Club. When Derp Derpingston wrote the novel, he had no idea how much waves this book would make.
                        The Book of the Derps is about an underdog Derp, named Derpe Derpwad that works his derpy heart out to make himself the
                        pinacle of the Derp Dream. Believe Best Offer Books when we say this is the hardest you will ever Derp.</p>
                        <p style="clear: both; margin-left: 100px; margin-right: 10px;">Word is that TBOTD will soon make it to the big screen and Derp Derpingston has
                        recruited none other than Nic Cage to play the underdog Derpe Derpwad. Joining the cast will be Jack Nicholson as Derpe Derpwad's
                        father and Meryl Streep will be cast as Derpe's Mother.</p>
                        <p style="clear: both; margin-left: 100px; margin-right: 10px;">Best Offer Books have received a mass amount of these novels to sell in
                        partnership with Derp Derpingston, <a href="detailtem.php">so please visit this link to make your purchases >></a></p>
                        
                    </div>
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
