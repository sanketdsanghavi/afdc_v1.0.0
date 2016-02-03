<div class="container" id="terrace-panels">
	<?php
			include('header_footer/header.php');
			for($br=0; $br<10; $br++){
					echo '<br/>';
				}
	?>
	
	<div class="row">
		<div class="col-md-9"><a href="index.php"><i class="fa fa-long-arrow-left fa-2x" style="color:white"></i></a></div>
		<div class="col-md-3">
			<button type="button" class="btn btn-primary pull-right" onclick="location.href='post_terrace.php';">Post Terrace For Rent</button>
		</div>
	</div>
	<br/>
	
			<div class="panel panel-default">
				<div class="panel-body">
					<form role="form" method="post" action="terrace.php">	
						<div class="row">
					    <div class="col-md-4 form-group">
							<label for="dates"><b>Date:</b></label>&nbsp;
							<select id="date" name="date" class="form-control" required="true">
							 	<option value="both">Both Days</option>
						     	<option value="fourteen">14th Only</option>
								<option value="fifteen">15th Only</option>
							</select>
						</div>
					    <div class="col-md-4 form-group">
							<label for="area">Area:</label>
							<select id="area_filter" name="area_filter" class="form-control">
								<option value="All Locations">All Locations</option>
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
						<div class="col-md-4 form-group">
						    <label for="capacity">Capacity:</label>
						    <select id="cap_filter" name="cap_filter" class="form-control">
						    	<option value="All Capacities">All Capacities</option>
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
					 	</div>
						<button type="submit" class="btn btn-primary pull-right">View Terraces</button> 
					</form>
				
			</div>
	</div>
	
	
	<br/>
<!-- Terraces Filters -->
<?php
	include('config/setup.php'); // Include the Database setup file
	$all_terraces = "SELECT * FROM terrace"; // Default select all
	$fourteen_filter = 1;  // Default
	$fifteen_filter = 1;  // Default
	
	if(isset($_POST['date'])){
		if($_POST['date']=="fourteen"){
			$fourteen_filter = 1;
			$fifteen_filter = 0;
		}
		if($_POST['date']=="fifteen"){
			$fourteen_filter = 0;
			$fifteen_filter = 1;
		}
		if($_POST['date']=="both"){
			$fourteen_filter = 1;
			$fifteen_filter = 1;
		}
	}
	if(isset($_POST['area_filter'])){
		if($_POST['area_filter']=="All Locations"){
			$area_filter ="1";
		}
		else{
			$area_filter = "area='".$_POST['area_filter']."'";
		}	
	}
	else{
		$area_filter ="1";
	}
	if(isset($_POST['cap_filter'])){
		if($_POST['cap_filter']=="All Capacities"){
			$cap_filter ="1";
		}
		else{
			$cap_filter = "capacity='".$_POST['cap_filter']."'";
		}
	}
	else{
		$cap_filter ="1";
	}
	if($fourteen_filter && $fifteen_filter){
		$all_terraces = "SELECT * FROM terrace WHERE (fourteen=true OR fifteen=true) AND $area_filter AND $cap_filter";
	}
	if($fourteen_filter && !($fifteen_filter)){
		$all_terraces = "SELECT * FROM terrace WHERE fourteen=true AND $area_filter AND $cap_filter";
	}
	if(!($fourteen_filter) && $fifteen_filter){
		$all_terraces = "SELECT * FROM terrace WHERE fifteen=true AND $area_filter AND $cap_filter";
	}	
	$result = mysqli_query($dbc, $all_terraces);	
	if(mysqli_num_rows($result)<1)
    {
?>
<div class="panel panel-default">
	<div class="panel-body">
		<br/><br/>
      <h1 align="center">Sorry. No Matching Results Found!</h1>
      	<br/><br/>
	</div>
</div>
  
<?php	  
    }
	else{
		if(isset($_POST['date'])){
?>
<div class="panel panel-default">
	<div class="panel-body">
        Showing Results for :<?php if($_POST['date']=="fourteen"){
        							echo "<b> 14th January</b>";} 
        						  if($_POST['date']=="fifteen"){
        						  	echo "<b> 15th January</b>";}
        						  if($_POST['date']=="both"){
        						    echo "<b> Both Days</b>";} echo "<br/>Area : <b>".$_POST['area_filter']."</b><br/>Capacity : <b>".$_POST['cap_filter']."</b>";?>
      	
	</div>
</div>
<?php	
		}
		while ($row = mysqli_fetch_assoc($result)) {
?>
<!-- add panels here -->
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
    		<div class="col-md-4 col-xs-2"><img class="fancybox" src="images_uploaded/<?php if(empty($row["imgname"])){echo "terrace_default.png";} else echo $row["imgname"]?>" width = 70% height = 70% style="background-color: white;"/></div>
    		<div class="col-md-4 col-xs-4">
    			<div class="row">
    				<h4>Rent:&nbsp;<i class="fa fa-inr"></i>&nbsp;<?php echo $row["rent"]?></h4>
    			</div>
    			<div class="row" style="margin-top: 10px; margin-bottom: 30px;">
    				<i class="fa fa-map-marker"></i>&nbsp;<?php echo $row["area"]?>
    			</div>
    			<div class="row" style="margin-top: 10px; margin-bottom: 30px;">
    				<b>Size:</b>&nbsp;<?php echo $row["size"]?> sqft
    			</div>
    			<div class="row">
    				<b>Capacity:</b>&nbsp;<?php echo $row["capacity"]?> persons
    			</div>
    		</div>
    		<div class="col-md-4 col-xs-6">
    			<div class="row">
    				<u><b>Posted By:-</b></u>
    			</div>
    			<div class="row" style="margin-top: 30px; margin-bottom: 30px;">
    				<?php echo $row["pname"]?>
    			</div>
    			<div class="row" style="margin-top: 30px; margin-bottom: 30px;">
    				<i class="fa fa-phone"></i>&nbsp;<?php echo $row["pno"]?>
    			</div>
    			<div class="row">
    				<i class="fa fa-envelope"></i>&nbsp;<?php echo $row["pemail"]?>
    			</div>
    		</div>
    	</div>
	</div>
</div>

<?php
		}
	}
?>
	<div class="col-md-12 text-center">
      <ul class="pagination" id="myPager"></ul>
 	</div>
</div>