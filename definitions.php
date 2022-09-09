<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Low Kok Wei">        
	<title>Accordion Definitions · Bootstrap 5.2</title>

	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">       
	<!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  
  <body>    	
  <?php
	include_once('include/navbar.php');
	include_once('include/db_connect_oop.php');						
	
	echo"<main class=\"container\">";
	  echo"<div class=\"bg-light p-3 rounded\">";
	   echo"<h1>Definitions</h1>";		
	  
		$sql = "SELECT id, description, answer from QueDef";
			$result = $mysqli->query($sql);
			if ($result->num_rows>0){
				while($row = $result->fetch_assoc()){
				echo"<div class=\"accordion\" id=\"accordionBoostrap\">";
				
				  echo"<div class=\"card\">";
					echo"<div class=\"card-header\" id=\"heading".$row["id"]."\">";
					  echo"<h2 class=\"mb-0\">";
						echo"<button class=\"btn btn-link btn-block text-left\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse".$row["id"]."\" aria-expanded=\"true\" aria-controls=\"collapse".$row["id"]."\">";
						  echo $row["description"];
						echo"</button>";
					  echo"</h2>";
					echo"</div>";

					echo"<div id=\"collapse".$row["id"]."\" class=\"collapse\" aria-labelledby=\"heading".$row["id"]."\" data-parent=\"#accordionBoostrap\">";
					  echo"<div class=\"card-body p-4\">";
						echo $row["answer"]. "<br>";
					  echo"</div>";
					echo"</div>";
				  echo"</div>";		  		  
					  
				echo"</div>";
				}
			}
			include_once('include/db_close_oop.php');				
	  echo"</div>";
	echo"</main>";
  
    echo "<script src=\"./bootstrap/js/bootstrap.bundle.min.js\"></script>";
  ?>
  </body>
</html>