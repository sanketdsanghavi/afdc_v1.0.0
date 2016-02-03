<?php
// Start the session
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_STRICT);
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
		<SCRIPT language=Javascript>
	        function isNumberKey(evt)
	       {
	          var charCode = (evt.which) ? evt.which : evt.keyCode;
	          if (charCode != 46 && charCode > 31 
	            && (charCode < 48 || charCode > 57))
	             return false;
	
	          return true;
	       }
	       function isLetterOnly(evt)
	       {
	          var charCode = (evt.which) ? evt.which : evt.keyCode;
	          if (!(charCode > 64 && charCode < 91) && !(charCode > 96 && charCode < 123) && !(charCode == 32))
	             return false;
	
	          return true;
	       }
	    </SCRIPT>
	</head>
		<body>
			<?php include_once("analyticstracking.php") ?>
			<div class="bgimg">
			<div class="container">
			<?php
				include('header_footer/header.php');
				for($br=0; $br<10; $br++){
						echo '<br/>';
					}
			?>		
			<a href="activities.php"><i class="fa fa-long-arrow-left fa-2x" style="color:white"></i></a><br/><br/>
			<?php
			// FORM VALIDATION AND HACK PROOFING
			// define variables and set to empty values
			$name = $email = $phone = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  $name = test_input($_POST["name"]);
			  $email = test_input($_POST["email"]);
			  $phone = test_input($_POST["phone"]);
			}
			
			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
			
		?>
		<?php
		include('config/setup.php'); // Include the Database setup file
		if(isset($_POST['register'])){
			$activityname = $_SESSION["activity"];
			$rate = $_SESSION["rate"];
			$noofppl = $_POST["noofpeople"];
			$total = $rate*$noofppl;
			$booking = "INSERT INTO bookactivity (name,email,phone,activityname,rate,noofppl,total) VALUES('$name','$email','$phone','$activityname','$rate','$noofppl','$total')";
			 if(!mysqli_query($dbc, $booking))
			   {
			      die('Could not enter data: ' . mysqli_error($dbc));
			   }
			  $headers = 'MIME-Version: 1.0' . "\r\n";
			  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			  $headers .= 'BCC: sanketsanghavi@gmail.com' . "\r\n";
			  $headers .= "From: info@allfesto.com";
			  
			  $msg = '<html><body>Dear '.$name.',<br/><br/>You have registered for the activity "'.$activityname.'" for '.$noofppl.' people. Total amount is Rs. '.$total.'.<br/>Thanks for booking with us! Our team will get back to you at the earliest with more details.<br/><br/><br/>Thanks and Regards,<br/>Allfesto.com Team!</body></html>';
			  mail($email,"New We Plan submit",$msg,$headers);
		?>   
		<div class="panel panel-default">	
			 <div class="panel-body">	
	  		 	<h3 align="center" color="">Thank you for Registering! We will contact you!</h3>
	  		 </div>
	  	</div>
	  	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	  	
	  	 		 
	  	
		<?php
		}
		else {
			$_SESSION["activity"] = $_POST["activity"];
			$_SESSION["rate"] = $_POST["rate"];
			
		?>
			<div class="panel panel-default">		
		    <div class="panel-heading"><h3 class="panel-title">Activity Booking Details</h3></div>
		    <div class="panel-body">	  
				<div class="row">
				<div class="col-md-3"></div>
		    	<div class="col-md-6">
		    		<?php
				echo "<br/><br/>"."Activity selected: <b>".$_SESSION["activity"]."</b><br/>";
				echo "Amount per participant: <b>₹ ".$_SESSION["rate"]."</b><br/><br/>";
			?>
					<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">	
						  <div class="form-group">
						    <label for="name">Name:</label>
						    <input type="text" class="form-control" id="name" name="name" required="true" maxlength="20" onkeypress="return isLetterOnly(event)">
						  </div>
						  <div class="form-group">
						    <label for="noofpeople">How many participants?</label>
						    <select id="noofpeople" name="noofpeople" class="form-control" required="true">
							 	<option value="1">1</option>
						     	<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
							  </select>
						  </div>
						  <div class="form-group">
						    <label for="email">Email address:</label>
						    <input type="email" class="form-control" id="email" name="email" maxlength="30" required="true">
						  </div>
						  <div class="form-group">
						    <label for="phone">Phone number:</label>
						    <input type="text" class="form-control" id="phone" name="phone" required="true" maxlength="10" onkeypress="return isNumberKey(event)">
						  </div>
						  <input type="hidden" name="register" value="true"/>
						  <button type="submit" class="btn btn-primary btn-lg pull-right" >Register!</button>	  
						  <br/><br/><br/><br/>
				</div>
			</div>
			</div>
		</div>	
		<?php
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