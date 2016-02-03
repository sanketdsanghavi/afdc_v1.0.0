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
			for($br=0; $br<5; $br++){
					echo '<br/>';
				}
		?>
		<?php
		include('config/setup.php'); // Include the Database setup file
		
		// FORM VALIDATION AND HACK PROOFING
		// define variables and set to empty values
			$name = $noofppl = $email = $phone = $city = "";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  $name = test_input($_POST["name"]);
			  $noofppl = test_input($_POST["noofppl"]);
			  $email = test_input($_POST["email"]);
			  $phone = test_input($_POST["phone"]);
			  $city = test_input($_POST["city"]);
			}
			
			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
		
		if(isset($_POST['weplanposted'])){
			echo "<div class='panel panel-default'><div class='panel-body'><h3 align='center'>Success! Thank you!</h3></div></div>";
			    if((isset($_POST["terrace"])||($_POST['package'] == "compac"))){
					$terrace = 1;
				}
				else $terrace = 0;
				if((isset($_POST["kites"])||($_POST['package'] == "compac"))){
					$kites = 1;
				}
				else $kites = 0;
				if((isset($_POST["firki"])||($_POST['package'] == "compac"))){
					$firki = 1;
				}
				else $firki = 0;
				if((isset($_POST["food"])||($_POST['package'] == "compac"))){
					$food = 1;
				}
				else $food = 0;
				if((isset($_POST["stay"])||($_POST['package'] == "compac"))){
					$stay = 1;
				}
				else $stay = 0;
				if((isset($_POST["activities"])||($_POST['package'] == "compac"))){
					$activities = 1;
				}
				else $activities = 0;
				if(isset($_POST['fourteen'])){
					$fourteen = 1;
				}
				else $fourteen = 0;
				if(isset($_POST['fifteen'])){
					$fifteen = 1;
				}
				else $fifteen = 0;
				
				
				
			$weplan = "INSERT INTO weplan(name,noofppl,terrace,kites,firki,food,stay,activities,fourteen,fifteen,email,phone,city) VALUES('$name','$noofppl','$terrace','$kites','$firki','$food','$stay','$activities','$fourteen','$fifteen','$email','$phone','$city')";
			 if(!mysqli_query($dbc, $weplan))
			   {
			      die('Could not enter data: ' . mysqli_error($dbc));
			   }
			 else {
				  $headers = 'MIME-Version: 1.0' . "\r\n";
				  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				  $headers .= "From: info@allfesto.com";
				  $msg = '<html><body>Name:'.$name.'<br/>No of ppl:'.$noofppl.'<br/>Terrace:'.$terrace.'<br/>Kites:'.$kites.'<br/>Firki:'.$firki.'<br/>Food:'.$food.'<br/>Stay:'.$stay.'<br/>Activities:'.$activities.'<br/>Fourteen:'.$fourteen.'<br/>Fifteen:'.$fifteen.'<br/>Email:'.$email.'<br/>Phone:'.$phone.'<br/>City:'.$city.'</body></html>';
				  mail("sanketsanghavi@gmail.com","New We Plan submit",$msg,$headers);
		 
			 }
			}
			else{
				echo "<h2 style='color:white;' align='center'>Let us plan a memorable experience for you!</h2><br/>";
			}
		?>
		<a href="index.php"><i class="fa fa-long-arrow-left fa-2x" style="color:white"></i></a><br/>
		<div class="panel panel-default panel-weplan">		
		    <div class="panel-heading"><h3 class="panel-title" align="center">New to the city? Don’t know where to head?</h3></div>
		    <div class="panel-body">	  
				<div class="row">
				<div class="col-md-2"></div>
		    	<div class="col-md-8">
					<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">	
						  <div class="form-group">
						    <label for="name">Name:</label>
						    <input type="text" class="form-control" id="name" name="name" required="true" maxlength="20" onkeypress="return isLetterOnly(event)">
						  </div>
						  <div class="form-group">
						    <label for="noofppl">How many persons are you?</label>
						    <input type="text" class="form-control" id="noofppl" name="noofppl" required="true" maxlength="2" onkeypress="return isNumberKey(event)">
						  </div>
						  <hr/>
						  <div class="form-group">
						  	<label>Looking For:</label>
						  </div>
						  <label class="radio-inline">
					     	 <input type="radio" name="package" id="compac" value="compac">Complete
					      </label>
					      <label class="radio-inline">
					     	 <input type="radio" name="package" id="cuspac" value="cuspac" checked="checked">Customized<b>&nbsp;&nbsp;Package</b>
					      </label><br/><br/>
						  <label class="checkbox-inline"><input type="checkbox" name="terrace" id="terrace" class="compackage">Terrace</label>
						  <label class="checkbox-inline"><input type="checkbox" name="kites" id="kites" class="compackage">Kites</label>
					      <label class="checkbox-inline"><input type="checkbox" name="firki" id="firki" class="compackage">Firki</label>
					      <label class="checkbox-inline"><input type="checkbox" name="food" id="food" class="compackage">Food</label>
				   	      <label class="checkbox-inline"><input type="checkbox" name="stay" id="stay" class="compackage">Stay</label>
				   	      <label class="checkbox-inline"><input type="checkbox" name="activities" id="activities" class="compackage">Activities</label>
						  <hr/>
						  <div class="form-group">
						  	<label>For Dates:</label>
						  </div>
						  <div class="checkbox">
						    <label><input type="checkbox" id="fourteen" name="fourteen">14th</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						    <label><input type="checkbox" id="fifteen" name="fifteen">15th <b>&nbsp;January</b></label>
						  </div>
						  <div class="form-group">
						    <label for="email">Email address:</label>
						    <input type="email" class="form-control" id="email" name="email" maxlength="30" required="true">
						  </div>
						  <div class="form-group">
						    <label for="phone">Phone number:</label>
						    <input type="text" class="form-control" id="phone" name="phone" required="true" maxlength="10" onkeypress="return isNumberKey(event)">
						  </div>
						  <div class="form-group">
						    <label for="city">You are coming from which city:</label>
						    <input type="text" class="form-control" id="city" name="city" required="true" maxlength="20" onkeypress="return isLetterOnly(event)">
						  </div>
						  <input type="hidden" name="weplanposted" id="weplanposted" value="true">
						  <button type="submit" class="btn btn-primary btn-lg pull-left" >Submit</button>
					</form>  
				</div>
				<div class="col-md-3"></div>
				</div>
			</div>
			</div>
			
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