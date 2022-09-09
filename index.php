<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Low Kok Wei">    
    <title>Fixed top navbar Home· Bootstrap 5.2</title>

	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">        
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  
  <body>    		    
	<?php
		include_once('include/navbar.php');
		include_once('include/db_init_oop.php');
	?>
	<main class="container">
	  <div class="bg-light p-3 rounded">
		<h1>Home </h1> 
		<h2 class="display-6"> Welcome to HTML/CSS/JS and Boostrap 5.2 </h1>
		<p class="lead">This multi-page website utilises the Bootstrap framework for navigation and display information as requested.</p>		
	  
		<div class="bg-info p-2 bg-opacity-25 rounded">
		   <p class="fw-semibold">Student : Low Kok Wei</p>
		   <p class="fw-semibold">ID : M214391</p>
		   <p class="fw-bold">Assessment : Task Two</p>
		   <p class="fw-bold"> TurnKey LAMP Server : http://192.168.56.97/tasktwo/index.php</p>
		</div>
	  </div>
	</main>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>      
  </body>
</html>