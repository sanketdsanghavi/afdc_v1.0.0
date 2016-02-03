<?php
// Start the session
session_start();
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
			<div class="container">
				<?php
					include('config/setup.php'); // Include the Database setup file
					$order_id = "SELECT MAX(orderid) from order_merchandise";
					$order_max = mysqli_fetch_array(mysqli_query($dbc, $order_id));
					$order_this= $order_max[0]+1;
					
					$order_insert = "INSERT INTO order_merchandise (orderid) VALUES ('$order_this')";
					$inserted = mysqli_query($dbc, $order_insert);
			
					$prod_type_query = "INSERT INTO order_items (orderid,type,name,color,qty,total) VALUES ('$order_this','kite','{$_SESSION["kite11namehidden"]}','{$_SESSION["kite11colorhidden"]}','{$_SESSION["selqty11"]}','{$_SESSION["kite11totalhidden"]}')";
					$r1 = mysqli_query($dbc, $prod_type_query);
				?>
			</div>
		</div>
	</body>
</html>