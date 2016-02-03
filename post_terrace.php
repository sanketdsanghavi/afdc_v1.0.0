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
				}?>
		<a href="terrace.php"><i class="fa fa-long-arrow-left fa-2x" style="color:white"></i></a><br/><br/>
		<?php
			// FORM VALIDATION AND HACK PROOFING
			// define variables and set to empty values
			$name = $phone = $email = $area = $rent = $capacity = "";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  $name = test_input($_POST["name"]);
			  $phone = test_input($_POST["phone"]);
			  $email = test_input($_POST["email"]);
			  $area = test_input($_POST["area"]);
			  $rent = test_input($_POST["rent"]);
			  $size = test_input($_POST["size"]);
			  $capacity = test_input($_POST["capacity"]);
			  $newfilename = "";
			}
			
			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
		?>
		<?php
		   if(is_uploaded_file($_FILES['image']['tmp_name'])){
		      $errors= array();
		      $file_name = $_FILES['image']['name'];
		      $file_size =$_FILES['image']['size'];
		      $file_tmp =$_FILES['image']['tmp_name'];
		      $file_type=$_FILES['image']['type'];
		      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		      
		      $expensions= array("jpeg","jpg","png");
		      
		      if(in_array($file_ext,$expensions)=== false){
		         $errors[]="Extension not allowed, please choose a JPEG or PNG file.";
		      }
		      
		      if($file_size > 2097152){
		         $errors[]='File size must be less than 2 MB';
		      }
		      
		      if(empty($errors)==true){
		      	 	$temp = explode(".", $_FILES["image"]["name"]);
				 	$newfilename = round(microtime(true)).'.'.end($temp);
					move_uploaded_file($_FILES["image"]["tmp_name"],"images_uploaded/".$newfilename);
		        // move_uploaded_file($file_tmp,"images_uploaded/".$file_name);
		        // 	echo "Success"; 
		      }
		      else{
		       //  print_r($errors);
		      }
		   }
		?>
		<?php
		include('config/setup.php'); // Include the Database setup file
		if(isset($_POST['terraceposted'])){
			if(isset($_POST['date'])){
				if($_POST['date']=="fourteen"){
					$fourteen = 1;
					$fifteen = 0;
				}
				if($_POST['date']=="fifteen"){
					$fourteen = 0;
					$fifteen = 1;
				}
				if($_POST['date']=="both"){
					$fourteen = 1;
					$fifteen = 1;
				}
			}	
			$new_terrace = "INSERT INTO terrace(pname,pno,pemail,area,rent,size,capacity,fourteen,fifteen,imgname) VALUES('$name','$phone','$email','$area','$rent','$size','$capacity','$fourteen','$fifteen','$newfilename')";
			 if(!mysqli_query($dbc, $new_terrace))
			   {
			      die('Could not enter data: ' . mysqli_error($dbc));
			   }
		?>   
		<div class="panel panel-default">	
			 <div class="panel-body">	
	  		 	<h3 align="center" color="">Thank you for Posting! Entered data successfully</h3>
	  		 </div>
	  	</div>
		<?php
		}
		?>
		<div class="panel panel-default">		
		    <div class="panel-heading"><h3 class="panel-title">Terrace Details</h3></div>
		    <div class="panel-body">	  
				<div class="row">
				<div class="col-md-3"></div>
		    	<div class="col-md-6">
					<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" autocomplete="off">	
						 <!-- <div class="form-group">
							 <label for="dates">Select the dates to rent out your terrace:</label>
						  </div>
						  <div class="checkbox">
						    <label><input type="checkbox" id="check14" name="check14">14th of January</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						    <label><input type="checkbox" id="check15" name="check15">15th of January</label>
						  </div>-->
						  <div class="form-group">
							<label for="date">Dates:</label>
							<select id="date" name="date" class="form-control" required="true">
							 	<option value="">Select the dates to rent out your terrace</option>
						     	<option value="fourteen">14th Only</option>
								<option value="fifteen">15th Only</option>
								<option value="both">Both Days</option>
							</select>
						  </div>
						  <div class="form-group">
						    <label for="name">Name:</label>
						    <input type="text" class="form-control" id="name" name="name" required="true" maxlength="20" onkeypress="return isLetterOnly(event)">
						  </div>
						  <div class="form-group">
						    <label for="email">Email address:</label>
						    <input type="email" class="form-control" id="email" name="email" maxlength="30" required="true">
						  </div>
						  
						  <div class="form-group">
							<label for="area">Area in Ahmedabad:</label>
							 <select id="area" name="area" class="form-control" required="true">
							 	<option value="">Please select Area</option>
						     	<option value="Ambawadi">Ambawadi</option>
								<option value="Asarwa">Asarwa</option>
								<option value="Ashram Road">Ashram Road</option>
								<option value="Astodia">Astodia</option>
								<option value="Bapu Nagar">Bapu Nagar</option>
								<option value="Bopal">Bopal</option>
								<option value="C.G. Road">C.G. Road</option>
								<option value="Chandkheda">Chandkheda</option>
								<option value="Dani Limbada">Dani Limbada</option>
								<option value="Dariapur">Dariapur</option>
								<option value="Ellis Bridge">Ellis Bridge</option>
								<option value="Gandhi Road">Gandhi Road</option>
								<option value="Ghatlodia">Ghatlodia</option>
								<option value="Gita Mandir Road">Gita Mandir Road</option>
								<option value="Gulbai Tekra">Gulbai Tekra</option>
								<option value="Jamalpur">Jamalpur</option>
								<option value="Jivraj Park">Jivraj Park</option>
								<option value="Kalupur">Kalupur</option>
								<option value="Kankaria">Kankaria</option>
								<option value="Khadia">Khadia</option>
								<option value="Khokra Mehmedabad">Khokra Mehmedabad</option>
								<option value="Lal Darwaza">Lal Darwaza</option>
								<option value="Manekchowk">Manekchowk</option>
								<option value="Maninagar">Maninagar</option>
								<option value="Meghani Nagar">Meghani Nagar</option>
								<option value="Mem Nagar">Mem Nagar</option>
								<option value="Mithakhali Six Roads">Mithakhali Six Roads</option>
								<option value="Naranpura">Naranpura</option>
								<option value="Naroda">Naroda</option>
								<option value="Narol">Narol</option>
								<option value="Navrangpura">Navrangpura</option>
								<option value="Odhav">Odhav</option>
								<option value="Paldi">Paldi</option>
								<option value="Prahlad Nagar">Prahlad Nagar</option>
								<option value="Raipur">Raipur</option>
								<option value="Ranip">Ranip</option>
								<option value="Ratanpole">Ratanpole</option>
								<option value="Relief Road">Relief Road</option>
								<option value="S.G. Road">S.G. Road</option>
								<option value="Sabarmati">Sabarmati</option>
								<option value="Sanand">Sanand</option>
								<option value="Sarangpur Darwaza">Sarangpur Darwaza</option>
								<option value="Saraspur">Saraspur</option>
								<option value="Satellite Area">Satellite Area</option>
								<option value="Shahibaug">Shahibaug</option>
								<option value="Shahpur">Shahpur</option>
								<option value="University Area">University Area</option>
								<option value="Vadaj">Vadaj</option>
								<option value="Vasana">Vasana</option>
								<option value="Vastrapur">Vastrapur</option>
							  </select>
						  </div>
						  <div class="form-group">
						    <label for="phone">Phone number:</label>
						    <input type="text" class="form-control" id="phone" name="phone" required="true" maxlength="10" onkeypress="return isNumberKey(event)">
						  </div>
						  <div class="form-group">
						    <label for="rent">Rent:</label>
						    <input type="text" class="form-control" id="rent" name="rent" required="true" maxlength="5" onkeypress="return isNumberKey(event)">
						  </div>
						  <div class="form-group">
						    <label for="size">Size in SqFt.:</label>
						    <input type="text" class="form-control" id="size" name="size" required="true" maxlength="5" onkeypress="return isNumberKey(event)">
						  </div>
						  <div class="form-group">
						    <label for="capacity">Capacity:</label>
						    <select id="capacity" name="capacity" class="form-control" required="true">
						    	<option value="">Please select Terrace capacity</option>
						     	<option value="10">0 to 10 persons</option>
								<option value="20">11 to 20 persons</option>
								<option value="30">21 to 30 persons</option>
								<option value="40">31 to 40 persons</option>
								<option value="50">41 to 50 persons</option>
								<option value="60">51 to 60 persons</option>
								<option value="70">61 to 70 persons</option>
								<option value="80">71 to 80 persons</option>
								<option value="90">81 to 90 persons</option>
								<option value="100">91 to 100 persons</option>
								<option value="101">100+ persons</option>
							</select>
						  </div>
						  <label for="file">Image size must be &lt; 2MB. Type: JPG/PNG</label>
						  <input type="file" name="image" />
						  <br/>
						  <div class="checkbox">
						    <label><input type="checkbox" id="tandc" name="tandc" required="true">I agree to the Allfesto <a href="tandc.php" target="_blank">Terms of Service</a> and <a href="privacy.php" target="_blank">Privacy Policy</a></label>&nbsp;
					      </div>
						  <div class="form-group">
						    <input type="hidden" name="terraceposted" id="terraceposted" value="true">
						  </div>
						  <button type="submit" class="btn btn-primary pull-right" >Post your Terrace!</button>
					</form>  
				</div>
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