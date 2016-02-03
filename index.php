<?php
// Start the session

?>
<!DOCTYPE html>
<html>
	<head>
		<?php
		include('config/css.php');
		include('config/js.php');
		?>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="config/template.css">
		<title>AllFesto!</title>
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
			<h1 style="color:white;" align="center">Experience Uttarayan - The Amdavadi Style</h1>
			<?php
			for($br=0; $br<10; $br++){
					echo '<br/>';
				}
			?>	  
			<div class="row">	
				<!-- <div class="col-md-3">
  					<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='buy_merchandise.php';"><i class="fa fa-shopping-cart fa-2x"></i><h3>STORE</h3></button>
  				</div>
				<div class="col-md-3">
  					<button type="button" class="btn btn-warning btn-lg btn-block" onclick="location.href='food.php';"><i class="fa fa-cutlery fa-2x"></i><h3>MEALS</h3></button>
  				</div> -->
				<div class="col-md-3">
  					<button type="button" class="btn btn-primary btn-block" onclick="location.href='activities.php';"><i class="fa fa-list fa-2x"></i><h3>Activities</h3></button>
  				</div>	
  				<div class="col-md-3">
  					<button type="button" class="btn btn-warning btn-block" onclick="location.href='food.php';"><i class="fa fa-cutlery fa-2x"></i><h3>Food</h3></button>					
				</div>	
				<div class="col-md-3">
  					<button type="button" class="btn btn-success btn-block" onclick="location.href='terrace.php';"><i class="fa fa-table fa-2x"></i><h3>Terraces</h3></button>
  				</div>  
  				<div class="col-md-3">
  					<button type="button" class="btn btn-danger btn-block" onclick="location.href='weplan.php';"><i class="fa fa-suitcase fa-2x"></i><h3>We plan</h3></button>					
				</div>
			</div>
			<br/>
			<?php
			for($br=0; $br<10; $br++){
					echo '<br/>';
				}
			?>	
			
    				<div class="row" >
    					<div class="col-md-3 col-xs-3">
    						<a href="http://www.radiomirchi.com/ahmedabad" target="_blank"><img src="images/radio.png" width=80% height=80%/></a>
    					</div>
    					<div class="col-md-3 col-xs-3">
    						<a href="https://jugnoo.in/#/" target="_blank"><img src="images/jugnoo.png" width=80% height=80%/></a>
    					</div>
    					<div class="col-md-3 col-xs-3">
    						<a href="http://www.dassurtikhaman.com/aboutus.php" target="_blank"><img src="images/das.png" width=80% height=80%/></a>
    					</div>
    					<div class="col-md-3 col-xs-3">
    						<a href="http://shop.peppertap.com/" target="_blank"><img src="images/peppertap.png" width=100% height=100%/></a>
    					</div>
    				</div>
    			
		
		<?php
	//	$headers = "From: sanketsanghavi@gmail.com";

	//	mail("sanketsanghavi@gmail.com","My subject","Hi",$headers);
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
