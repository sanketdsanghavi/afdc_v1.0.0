<div class="tab-content">
<?php

	mysqli_data_seek($r1,0); // Reset the same result array before reuse
	while($d1=mysqli_fetch_array($r1)){
		$id=$d1['typeid'];
?>	
	<div id="<?php echo $id.'"'; 
    	if($id == 1) {	//id == 1 --> Patang Category
    		$active = " in active";
			$icon = "<i class='fa fa-sticky-note fa-3x'></i>";	//&nbsp;&nbsp;&nbsp;&nbsp;
			$button = "<form action='#' method='POST'><input type='text' name='firstname'><input type='submit' value='Next'></form>";
			$summary = "";	
		} 
		if($id == 2) {	//id == 2 --> Firki Category
			$active = "";
			$icon="<i class='fa fa-crop fa-3x'></i>";
			$button = "";
			$summary = "";	
		}
		if($id == 3) {	//id == 3 --> Lantern Category
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
	?><?php echo "class = 'tab-pane fade ".$active."'>" ?><pre><?php echo $icon.$button.$summary;?></pre>
	</div>
	<?php
  		}
  	?>
</div>