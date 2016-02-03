<?php
// Start the session
session_start();
//$_SESSION["a"]= "Hiii";
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
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="config/template.css">
		<title>
			AllFesto!
		</title>
	</head>
	<body>
		<?php include_once("analyticstracking.php") ?>
		<div class="bgimg">
			<div class="container">
				<?php
				include('header_footer/header.php');
				for($br=0; $br<14; $br++){
						echo '<br/>';
					}
				?>	  
				<h1 style="color:white;" align="center">Stay tuned for mouth-watering festive food deals!!!<br/>We are working to get amazing festive foods to your terraces...</h1>
				<?php
				for($br=0; $br<14; $br++){
						echo '<br/>';
					}
				?>	  
			</div>
			<?php
				for($br=0; $br<10; $br++){
							echo '<br/>';
						}
				include('header_footer/footer.php');
			?>	
		</div>
	</body>
</html>
