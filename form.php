<! doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
	body {
	    	background-color: #ababab;
	}
	label {
		
		float:left;
		width: 160px;
		display: block;
	}
	li{
		list-style:none;
	}
	input{
		disply:block;
	}
	fieldset{
		width: 300px;
	}
</style>
</head>
<body>
	<?php
		include('config/setup.php'); // Include the Database setup file
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$prodname = $_POST["prodname"];
			$prodrate = $_POST["prodrate"];
			$email = $_POST["email"];
			$phone = $_POST["phone"];
			
			$request = "INSERT INTO prod_request(prodname,prodrate,email,phone) VALUES('$prodname','$prodrate','$email','$phone')";
			if(!mysqli_query($dbc, $request))
			   {
			      	die('Could not enter data: ' . mysqli_error($dbc));
			   }
			else {
				  $requestidquery = "SELECT MAX(requestid) FROM prod_request";
				  $requestidresult = mysqli_query($dbc, $requestidquery) OR die(mysqli_error($dbc));
				  while ($row = mysqli_fetch_row($requestidresult)) {
				        $requestid = $row[0];
				    }
				    
				  $selleridquery = "SELECT * FROM seller";
				  $selleridresult = mysqli_query($dbc, $selleridquery) OR die(mysqli_error($dbc));
				  while ($row = mysqli_fetch_assoc($selleridresult)) {
				        $sellerid = $row[sellerid];
				        $selleremail = $row[selleremail]; 
				    
					  $headers = 'MIME-Version: 1.0' . "\r\n";
					  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					  $headers .= "From: a@a.com";
					  $msg = '<html><body>Dear Seller1,<br/><br/>The Following is a new product inquiry. Kindly revert back, with your response.<br/>Product Name: '.$prodname.'<br/>Product Rate: Rs. '.$prodrate.'<br/><form action="http://allfesto.com/Test_Cogent/sellerresponse.php" method = "post"><input type="hidden" value="'.$requestid.'" name="requestid"/><input type="hidden" value="'.$sellerid.'" name="sellerid"/><input type="hidden" value="Yes" name="newrate"/><input type="submit" name="Yes"></form><br/><form action="http://allfesto.com/Test_Cogent/sellerresponse.php" method = "post"><input type="hidden" value="'.$requestid.'" name="requestid"/><input type="hidden" value="'.$sellerid.'" name="sellerid"/><input type="hidden" value="No" name="newrate"/><input type="submit" name="No"></form><br/>GIVE YOUR NEW RATE: <form action="http://allfesto.com/Test_Cogent/sellerresponse.php" method = "post"><input type="hidden" value="'.$requestid.'" name="requestid"/><input type="hidden" value="'.$sellerid.'" name="sellerid"/><input type="text" name="newrate"/><input type="submit" name="submit"></form></body></html>';
					  mail($selleremail,"New product request",$msg,$headers);
				}
			 }
		}
	
	?>
	<ul>
		<form action="#" method="post">
			<fieldset>
	    			<legend>Product Inquiry:</legend><br/><br/>
				<li><label for="prodname">Request Product Name: </label><input id = "prodname" name = "prodname" type = "text"/></li><br/>
				<li><label for="prodrate">Request Product Price: </label><input id = "prodrate" name = "prodrate" type = "text"/></li><br/>
				<li><label for="email">Your Email ID: </label><input id = "email" name = "email" type = "email"/></li><br/>
				<li><label for="phone">Your Contact Number: </label><input id = "phone" name = "phone" type = "text"/></li><br/><br/>
				<li><input id = "submit" name="submit" type="submit"/></li><br/><br/>
			</fieldset>
		</form>
	</ul>
</body>
</html>