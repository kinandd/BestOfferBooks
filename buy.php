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
    /*
    table {
      margin-top: 50px;
      border: solid thin black;
    }
    table th {
      background-color: #d3d3d3;
      font-size: 1.2em;
      text-align: center;
      border: solid thin black;
    }
    table tr,td {
      border: solid thin black;
    }
    table td {
      padding: 10px;
      width: 200px;
    }
    */
  </style>
</head>
<body>

<?php
include_once('header.php');
?>
<div id="container">
    <?php

    //require_once("config/db.php");
    include_once 'includes/dbconnect.php';
      $result = mysqli_query($con,"SELECT * FROM books ORDER by book_id");
	      echo "<table class='table table-striped table-hover' align='center'>";
	      echo "<thead>";
		echo "<tr>";
		  echo "<th>Book title</th>";
		  echo "<th>Book price</th>";
		  echo "<th>Book condition</th>";
		echo "</tr>";
	      echo "</thead>";
	      echo "<tbody>";
	      while($test = mysqli_fetch_array($result))
	      {
		      $id=$test['book_id'];
		      echo "<tr>";
		      echo "<td> <a href ='detailitem.php?id=$id'>".$test['title']."</a></td>";
		      echo "<td>$". $test['cost']. "</td>";
		      echo "<td>". strtoupper($test['book_cond']). "</td>";
		      echo "</tr>";

	      }
	      echo "</tbody>";
	      echo "</table>";    
    ?>
</div>
</body>
</html>