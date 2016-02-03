<div class="container">
			<ul class="nav nav-tabs nav-justified">
			<?php
		  		$i = 0;
		  		while($d1=mysqli_fetch_array($r1))
		  		{	
			?>	
		    	<li <?php 
				    if($i == 1) {
	    				echo "class='active'>";
					}
					else {
						echo ">";
					}	
		    	?><a data-toggle="tab" href="#<?php echo $d1["typeid"].'">'.$d1["typename"]; 
		    	?></a></li>
				<?php
			  		$i++;}
			  	?>
		  	</ul>
		  	<?php
		  		include('views/buy_merchandise_tab_content.php');
		  	?>	 
		</div>