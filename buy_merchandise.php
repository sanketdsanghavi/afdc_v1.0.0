<?php
// Start the session
session_start();
$_SESSION["a"]= "Hiii";
//unset($_SESSION["summary"]);
?>

<!DOCTYPE html>
<html>
	<head>
		<?php
		include('config/css.php'); // Include Bootstrap CSS,
		include('config/js.php');  // JS and Fontawesome
		?>
		<!-- Link custom override CSS -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="config/css.css">
		<title>
			AllFesto!
		</title>
	</head>
	<body>
		<div class="bgimg">
		
		<?php
	    include('config/setup.php'); // Include the Database setup file
		$prod_type_query = "SELECT * FROM prodtype";
		$r1 = mysqli_query($dbc, $prod_type_query);
		
		include('views/panels.php');
		?>
		</div>
	</body>
</html>
