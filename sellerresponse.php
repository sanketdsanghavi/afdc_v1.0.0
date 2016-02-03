<! doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
	body {
	    	background-color: #ababab;
	}
</style>
</head>
<body>
	<?php
		include('config/setup.php'); // Include the Database setup file
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$revisedrate = $_POST["newrate"];
			$requestid = $_POST["requestid"];
			$sellerid = $_POST["sellerid"];
		}
		$request = "INSERT INTO seller_response(requestid,sellerid,revisedrate) VALUES('$requestid','$sellerid','$revisedrate')";
			if(!mysqli_query($dbc, $request))
			   {
			      	die('Could not enter data: ' . mysqli_error($dbc));
			   }
			 else
			   {
			 	echo "THANK YOU FOR SUBMITTING YOUR RESPONSE! IT HAS BEEN STORED IN OUR SYSTEM";
			   }
	?>
</body>
</html>