<!DOCTYPE html>

<html>
<head>
    <title>Best Offer Books</title>
    <link rel="stylesheet" type="text/css" href="css/desktop.css" />
    <style>
        #rating
        {
            height: 267px;
            width: 250px;
            float: right;
            text-align: center;
        }
        #other
        {
            height: 267px;
            width: 250px;
            float: right;
            text-align: center;
        }
        #name
        {
            height: 267px;
            width: 200px;
            float: right;
            text-align: center;
        }
        #bookContainer
        {
            
            background-color: aliceblue;
            width: 100%;
            clear: both;
            margin-top: 15px;
            height: 350px;
        }
        .book
        {
            float: right;
            height: 320px;
            width: 31%;
            border: solid 1px black;
            margin: 7px;
        
        }
        
    </style>
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
        <!-- MAIN CONTENT DIV HOLDS NEWS FEED AND RECENT LISTINGS -->
        <div id="main-content">
            <div id="left-content">
                <img src="images/stickguy.png"/>
                <div id="rating"><h2>User Rating:</h2><br/>
                <span style="font-size:40px;">89%</span>
                </div>
                <div id="other">
                <h2>Books Sold<br/></h2>
                    <span style="font-size:40px;">10</span><br/>
                    <h2>Books purchased</h2>
                    <span style="font-size:40px;">8</span>
                </div>
                <div id="name">
                <h2>Name:</h2>
                    <br/>
                    <span style="font-size:25px;">Mikey Hagen</span>
                </div>
                <div id="bookContainer">
                    <div class="book">book</div>
                    <div class="book">book</div>
                    <div class="book">book</div>
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