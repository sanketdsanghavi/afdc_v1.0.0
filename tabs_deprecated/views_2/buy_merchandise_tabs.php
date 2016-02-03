<div class="container">
			<ul class="nav nav-tabs nav-justified">
			<?php
		  		
		  		while($d1=mysqli_fetch_array($r1))
		  		{
		  			$tab_id = $d1['typeid'];
		  			if(isset($_POST["nexttab"])){
		  				if($_POST["nexttab"] == "Firki"){
							// Query to remove hard coded id below 
		  					if($tab_id == 2)
							{
								$active_tab = " class='active'";
							}
							else{
								$active_tab = "";
							}
						}
					}
					else{
						    if($tab_id == 1) {
			    				$active_tab = " class='active'";
							}
							else{
								$active_tab = "";
							}
					}	
		    	?><li<?php echo $active_tab;?>><a data-toggle="tab" href="#<?php echo $tab_id.'">'.$d1["typename"];?></a></li>
			<?php
		  		}
		  	?>
		  	</ul>
		  	<?php
		  		include('views_2/buy_merchandise_tab_content.php');
		  	?>	 
		</div>