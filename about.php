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
		  <div class="panel-heading">Matt</div>
		  <div class="panel-body">
			Matt is a cool dude. Fizzle ipsizzle dolizzle shizzle my nizzle crocodizzle nizzle, consectetizzle adipiscing elit. Nullam sapizzle velit, aliquet volutpizzle, crunk fizzle, mammasay mammasa mamma oo sa vizzle, dizzle. Pellentesque pimpin' boom shackalack. The bizzle rizzle. Uhuh ... yih!
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title">Mikey</h3>
		  </div>
		  <div class="panel-body">
			Mikey is also a cool dude.Fizzle ipsizzle dolizzle shizzle my nizzle crocodizzle nizzle, consectetizzle adipiscing elit. Nullam sapizzle velit, aliquet volutpizzle, crunk fizzle, mammasay mammasa mamma oo sa vizzle, dizzle. Pellentesque pimpin' boom shackalack. The bizzle rizzle. 
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">Christian</div>
		  <div class="panel-body">
			Mikey is yet another cool dude.Fizzle ipsizzle dolizzle shizzle my nizzle crocodizzle nizzle, consectetizzle adipiscing elit. Nullam sapizzle velit, aliquet volutpizzle, crunk fizzle, mammasay mammasa mamma oo sa vizzle, dizzle. Pellentesque pimpin' boom shackalack. The bizzle rizzle. 
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title">Andrew</h3>
		  </div>
		  <div class="panel-body">
			Andrew is alright I guess.Fizzle ipsizzle dolizzle shizzle my nizzle crocodizzle nizzle, consectetizzle adipiscing elit. Nullam sapizzle velit, aliquet volutpizzle, crunk fizzle, mammasay mammasa mamma oo sa vizzle, dizzle. Pellentesque pimpin' boom shackalack. The bizzle rizzle. 
		  </div>
		</div>
	</div>

</body>
</html>