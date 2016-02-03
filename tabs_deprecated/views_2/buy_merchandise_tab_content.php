<div class="tab-content">
<?php
echo $_SESSION["a"];
	mysqli_data_seek($r1,0); // Reset the same result array before reuse
	while($d1=mysqli_fetch_array($r1)){
		$content_id=$d1['typeid'];
		
		if(isset($_POST["nexttab"])){
			if($_POST["nexttab"] == "Firki"){
			// Query to remove hard coded id below
				if($content_id == 2){
					$active = " in active";
					$icon="<i class='fa fa-crop fa-3x'></i>";
					$button = "";
					$summary = "";	
				}
				if($content_id == 1) {	//id == 1 --> Patang Category
		    		$active = "";
					$icon = "<i class='fa fa-sticky-note fa-3x'></i>";	//&nbsp;&nbsp;&nbsp;&nbsp;
					$button = "<form action='#' method='POST'><input type='text' name='firstname'><input type='hidden' name='nexttab' value='Firki'><input type='submit' value='Next'></form>";
					$summary = "";	
				} 
				if($content_id == 3) {	//id == 3 --> Lantern Category
					$active = "";
					$icon="<i class='fa fa-archive fa-3x'></i>";
					$button = "";
					$summary = "";	
				}
				if($d1['typename'] == "Summary"){
					$active = "";
					$icon="";
					$button = "";
					$summary ="";
					
					if(isset($_POST["firstname"]))
					{
						
						$_SESSION["summary"]=$_SESSION["summary"].$_POST["firstname"];
						$summary =  $_SESSION["summary"];
					}	
				}
			}
		}
		else{
			if($content_id == 1) {	//id == 1 --> Patang Category
	    		$active = " in active";
				$icon = "<i class='fa fa-sticky-note fa-3x'></i>";	//&nbsp;&nbsp;&nbsp;&nbsp;
				$button = "<form action='#' method='POST'><input type='text' name='firstname'><input type='hidden' name='nexttab' value='Firki'><input type='submit' value='Next'></form>";
				$summary = "";	
			} 
			if($content_id == 2) {	//id == 2 --> Firki Category
				$active = "";
				$icon="<i class='fa fa-crop fa-3x'></i>";
				$button = "";
				$summary = "";	
			}
			if($content_id == 3) {	//id == 3 --> Lantern Category
				$active = "";
				$icon="<i class='fa fa-archive fa-3x'></i>";
				$button = "";
				$summary = "";	
			}
			if($d1['typename'] == "Summary"){
				$active = "";
				$icon="";
				$button = "";
				$summary ="";
				
				if(isset($_POST["firstname"]))
				{
					$_SESSION["summary"]["patang"]=$_POST["firstname"];
					$summary =  $_SESSION["summary"]["patang"];
				}	
			}
		} 
	    	
	echo "<div id='".$content_id."'"."class = 'tab-pane fade ".$active."'>" ?><pre><?php echo $icon.$button.$summary;?></pre>
	</div>
	<?php
  		}
  	?>
</div>