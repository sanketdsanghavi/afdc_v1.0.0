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
				<div class="panel panel-default">		
	    			<div class="panel-heading"><h3 class="panel-title">SUMMARY</h3></div>
	    			<div class="panel-body">	    
						<div class="row">
							<div class="col-xs-3 col-md-3">
								<?php 
									//$msg = "Hi";
									//$mail_sent = mail("test@hotmail.com","My subject",$msg);
									
									//echo $mail_sent ? "Mail sent" : "Mail failed";
									
									if($_POST["selqty11"]>0){
										echo $_POST["kite11namehidden"];
										$_SESSION["kite11namehidden"] = $_POST["kite11namehidden"];
								?>
							</div>
							<div class="col-xs-3 col-md-3">
								<?php
									echo "<i class='fa fa-square fa-2x' style='color:".$_POST["kite11colorhidden"].";'></i>";
									$_SESSION["kite11colorhidden"] = $_POST["kite11colorhidden"];
								?>
							</div>
							<div class="col-xs-3 col-md-3">			
								<?php		
									echo $_POST["selqty11"];
									$_SESSION["selqty11"] = $_POST["selqty11"];
								?>
							</div>
							<div class="col-xs-3 col-md-3">
								<?php
									echo $_POST["kite11totalhidden"];
									$_SESSION["kite11totalhidden"] = $_POST["kite11totalhidden"];
									}
								?>
							</div>
						</div>
						
						<div class="row">
							<div class="col-xs-3 col-md-3">
								<?php 
									if($_POST["selqty12"]>0){
									echo $_POST["kite12namehidden"];
								?>
							</div>
							<div class="col-xs-3 col-md-3">
								<?php
									echo "<i class='fa fa-square fa-2x' style='color:".$_POST["kite12colorhidden"].";'></i>";
								?>
							</div>
							<div class="col-xs-3 col-md-3">			
								<?php		
									echo $_POST["selqty12"];
								?>
							</div>
							<div class="col-xs-3 col-md-3">
								<?php
									echo $_POST["kite12totalhidden"];
									}
								?>
							</div>
						</div>
						
						<div class="row">
							<div class="col-xs-3 col-md-3">
								<?php 
									if($_POST["selqty13"]>0){
									echo $_POST["kite13namehidden"];
								?>
							</div>
							<div class="col-xs-3 col-md-3">
								<?php
									echo "<i class='fa fa-square fa-2x' style='color:".$_POST["kite13colorhidden"].";'></i>";
								?>
							</div>
							<div class="col-xs-3 col-md-3">			
								<?php		
									echo $_POST["selqty13"];
								?>
							</div>
							<div class="col-xs-3 col-md-3">
								<?php
									echo $_POST["kite13totalhidden"];
									}
								?>
							</div>
						</div>
						
					</div>
				</div>
				<form class="form-horizontal" role="form" method="post" action="OrderConfirm.php">
					<div class="form-group">
	   					<input type="submit" id="submit" name="submit" value="summary" class="btn btn-primary">
	   				</div>
				</form>
			
			</div>
		</div>
	</body>
</html>