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
				for($br=0; $br<10; $br++){
						echo '<br/>';
					}
			?>		
			<a href="index.php"><i class="fa fa-long-arrow-left fa-2x" style="color:white"></i></a><br/><br/>
			<form role="form" method="post" action="bookactivities.php" enctype="multipart/form-data">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<div class="row">
								<div class="col-md-10 col-xs-9">Kite Making Workshop</div>
								<div class="col-md-2 col-xs-3">10th Jan</div>
							</div>
						</h3>
					</div>
					<div class="panel-body">
					<div class="row">
						<div class="col-md-5">
							<img src="images/kite making.png" width=100% height=100%>	
						</div>
						<div class="col-md-7">
							<div class="row">
								<h4 align="left"><p style="padding-left: 10px">Everybody flies a kite, ever tried to make one? Allfesto gives you the chance to add a personalized touch to your own kite. Learn how to make a kite in the Kite Making workshop, with our professional kite maker. Followed by learning how to fly kite in the heart of the old city.</p>
								<ul>
									<li>Visit to the kite museum</li>
									<li>Tour to the old city (pol houses)</li>
									<li>Learn how to make a Kite</li>
									<li>Learn how to fly a Kite</li>
								</ul></h4>
							</div><br/>
							<div class="row" align="left" style="padding-left: 10px">
								<h4><b>
									Price:</b> ₹ 300<br/> 
									<b>Venue:</b> Pol House (Old city)<br/>
									<b>Timings:</b> 10 am - 2 pm<br/><br/>
								</h4>
								<input type="hidden" name="activity" value="Kite Making Workshop">
								<input type="hidden" name="rate" value="300">
								<button type="submit" class="btn btn-primary btn-lg pull-left">Book Now</button>
							</div>
						</div>
					</div>
					</div>
				</div>
			</form>
			<form role="form" method="post" action="bookactivities.php" enctype="multipart/form-data">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<div class="row">
								<div class="col-md-10 col-xs-9">Undhiyu in the making</div>
								<div class="col-md-2 col-xs-3">11th Jan</div>
							</div>
						</h3>
					</div>
					<div class="panel-body">
					<div class="row">
						<div class="col-md-5">
							<img src="images/4.png" width=100% height=100%>	
						</div>
						<div class="col-md-7">
							<div class="row">
								<h4 align="left"><p style="padding-left: 10px">One common thing that all the gujjuites do during Uttarayan, apart from flying kites, is to indulge in the typical festive food. Best of them is Undhiyu. Allfesto brings you Undhiyu in the making, where you can come and learn how to make Undhiyu from our expert chef.</p>
								<ul>
									<li>Learn how to make Undhiyu from a renowned Chef</li>
									<li>Enjoy other delicacies like chiki/faafda/etc.</li>
								</ul></h4>
							</div><br/>
							<div class="row" align="left" style="padding-left: 10px">
								<h4><b>
									Price:</b> ₹ 300<br/> 
									<b>Venue:</b> Mani Mansion, Paldi<br/>
									<b>Timings:</b> 3 pm - 6 pm<br/><br/>
								</h4>
								<input type="hidden" name="activity" value="Undhiyu in the making">
								<input type="hidden" name="rate" value="300">
								<button type="submit" class="btn btn-primary btn-lg pull-left">Book Now</button>
							</div>
						</div><br/>
					</div>
					</div>
				</div>
			</form>
			<form role="form" method="post" action="bookactivities.php" enctype="multipart/form-data">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1 class="panel-title">
							<div class="row">
								<div class="col-md-10 col-xs-9">Tour to the Kite Market</div>
								<div class="col-md-2 col-xs-3">11th Jan</div>
							</div>
						</h1>
					</div>
					<div class="panel-body">
					<div class="row">
						<div class="col-md-5">
							<img src="images/1.png" width=100% height=100%>	
						</div>
						<div class="col-md-7">
							<div class="row">
								<h4 align="left"><p style="padding-left: 10px">Visit the kite market, enjoy activities like 'Walk through the Kite Bazaar with a local guide' and 'Photo walk competition'. Buy kites and firkis from exclusive vendors.</p>
								<ul>
									<li>Photo walk </li>
									<li>On the spot competition</li>
									<li>Indulge in street food</li>
									<li>Buy kites and firkis</li>
								</ul></h4>
							</div><br/>
							<div class="row" align="left" style="padding-left: 10px">
								<h4><b>
									Price:</b> ₹ 200<br/> 
									<b>Venue:</b> Old City<br/>
									<b>Timings:</b> 8 pm - 11 pm<br/><br/>
								</h4>
								<input type="hidden" name="activity" value="Tour to the Kite Market">
								<input type="hidden" name="rate" value="200">
								<button type="submit" class="btn btn-primary btn-lg pull-left">Book Now</button>
							</div>
						</div>
					</div>
					</div>
				</div>
			</form>
			<form role="form" method="post" action="bookactivities.php" enctype="multipart/form-data">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<div class="row">
								<div class="col-md-10 col-xs-9">Kinya Party</div>
								<div class="col-md-2 col-xs-3">13th Jan</div>
							</div>
						</h3>
					</div>
					<div class="panel-body">
					<div class="row">
						<div class="col-md-5">
							<img src="images/5.png" width=100% height=100%>	
						</div>
						<div class="col-md-7">
							<div class="row">
								<h4 align="left"><p style="padding-left: 10px">Tying kinya with friends and family is almost a ritual, which every Amdawadi knows of. Allfesto brings you Kinya Party, where you can prep up for Uttarayan with food, music and activities in the heart of the old city.</p>
								<ul>
									<li>Learn how to tie kinya with your friends/family</li>
									<li>Enjoy food/music/bonfire</li>
									<li>Take part in group activities</li>
								</ul></h4>
							</div><br/>
							<div class="row" align="left" style="padding-left: 10px">
								<h4><b>
									Price:</b> ₹ 450<br/> 
									<b>Venue:</b> Pol House (Old city)<br/>
									<b>Timings:</b> 6 pm - 11 pm<br/><br/>
								</b></h4>
								<input type="hidden" name="activity" value="Kinya Party">
								<input type="hidden" name="rate" value="450">
								<button type="submit" class="btn btn-primary btn-lg pull-left">Book Now</button>
							</div>
						</div><br/>
					</div>
					</div>
				</div>
			</form>
			<form role="form" method="post" action="bookactivities.php" enctype="multipart/form-data">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<div class="row">
								<div class="col-md-10 col-xs-9">Kite Flying Competition</div>
								<div class="col-md-2 col-xs-3">8th,9th Jan</div>
							</div>
						</h3>
					</div>
					<div class="panel-body">
					<div class="row">
						<div class="col-md-5">
							<img src="images/kite_flying.png" width=100% height=100%>	
						</div>
						<div class="col-md-7">
							<div class="row">
								<h4 align="left"><p style="padding-left: 10px">Lapetttt! We all know the feeling of screaming out this word and wouldn't miss an opportunity to cut other kites. Allfesto brings you, Kite Flying Competition in the heart of the old city. Come and be a part of one mad uttarayan.</p>
								<ul>
									<li> Authentic Kite Flying competition</li>
									<li>Location, where the real action is! Old City!</li>
								</ul></h4>
							</div><br/>
							<div class="row" align="left" style="padding-left: 10px">
								<h4><b>
									Price:</b> ₹ 200<br/> 
									<b>Venue:</b> Pol House (Old city)<br/>
									<b>Timings:</b> 5 pm - 8 pm<br/><br/>
								</b></h4>
								<input type="hidden" name="activity" value="Kite Flying Competition">
								<input type="hidden" name="rate" value="200">
								<button type="submit" class="btn btn-primary btn-lg pull-left">Book Now</button>
							</div>
						</div><br/>
					</div>
					</div>
				</div>
			</form>
			
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