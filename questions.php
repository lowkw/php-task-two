<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Low Kok Wei">       
	<title>Collapsible Questions · Bootstrap 5.2</title>	

	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">       
	<!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">	
  </head>
  
  <body>	
	<?php
		include_once('include/navbar.php');
		include_once('include/db_connect_oop.php');
		
		echo "<main class=\"container\">";
		echo "<div class=\"bg-light p-3 rounded\">";
		echo "<h1>Questions</h1>";
					
			$sql = "SELECT id, question from QueDef";
			$result = $mysqli->query($sql);
			if ($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					echo "<p class=\"d-grid gap-2\">";
					echo  "<button class=\"btn btn-outline-primary text-start\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseWidth".$row["id"]."\" aria-expanded=\"false\" aria-controls=\"collapseWidth".$row["id"]."\">";
						echo "Question " . $row["id"];
					echo  "</button>";
					echo "</p>";
					echo "<div class=\"collapse\" id=\"collapseWidth".$row["id"]."\">";
					echo  "<div class=\"card card-body\">";
						echo $row["question"]. "<br>";
					echo  "</div>";
					echo "</div>";
				}
			}
			include_once('include/db_close_oop.php');				
		
		echo "</div>";
		echo "</main>";	
		echo "<script src=\"./bootstrap/js/bootstrap.bundle.min.js\"></script>"
	?>
  </body>
</html>