<div class="container" id="panels">
	<?php
		include('header_footer/header.php');
		for($br=0; $br<10; $br++){
				echo '<br/>';
			}
	?>	 
	<form class="form-horizontal" role="form" method="post" action="summary.php">
	<div class="panel panel-default">		
	    <div class="panel-heading"><h3 class="panel-title">PATANG (KITE)</h3></div>
	    <div class="panel-body">	    
	    	<?php
	    	//  Kite11 -> type 1 and color 1
	    		$kite1= "CHEEL";
	    		$kite2= "ROCKET";
	    		$kite3= "DHAAL";
				$color1= "multicolor";
				$color2= "white";
				//$color3= "yellow";
	    	?>
	    	<div class="row">
		    	<div class="col-md-4">
		    		<h4 class="type-titles"><?php echo $kite1; ?><br/><br/><img src="images/cheel.jpg" width=60% height=60%/><br/><br/>₹ 80 / 20 kite</h4>
		    	</div>
		    	<div class="col-md-8">
		    		<br/><br/>
		    		<div class="row">
		    			<div class="col-xs-4 col-md-4"><p>Color</p></div>
		    			<div class="col-xs-4 col-md-4"><p>Qty</p></div>
		    			<div class="col-xs-4 col-md-4"><p>Total</p></div>
		    		</div>
	    			<div class="row">  		
			    		<div class="col-xs-4 col-md-4 colorqtytotal"><i class='fa fa-square fa-2x' style="color:<?php echo $color1; ?>;"></i></div>
			    		<div class="col-xs-1 col-md-1"></div>
			    		<div class="col-xs-2 col-md-2">
					    	<div class="form-group">
								  <select class="form-control" id="selqty11" name="selqty11">
								  	<option>0</option>
								    <option>5</option>
								    <option>10</option>
								    <option>15</option>
								    <option>20</option>
								  </select>
							</div>
						</div>
						<div class="col-xs-1 col-md-1"></div>
						<div class="col-xs-4 col-md-4">
							<p id="kite11total">0</p>
							<input type="hidden" name="kite11totalhidden" id="kite11totalhidden" value="0"/>
							<input type="hidden" name="kite11colorhidden" id="kite11colorhidden" value="<?php echo $color1; ?>"/>
							<input type="hidden" name="kite11namehidden" id="kite11namehidden" value="<?php echo $kite1; ?>"/>
						</div>
					</div>
					<div class="row">  		
			    		<div class="col-xs-4 col-md-4 colorqtytotal"><i class='fa fa-square fa-2x' style="color:<?php echo $color2; ?>;"></i></div>
			    		<div class="col-xs-1 col-md-1"></div>
			    		<div class="col-xs-2 col-md-2">
					    	<div class="form-group">
								  <select class="form-control" id="selqty12" name="selqty12">
								  	<option>0</option>
								    <option>5</option>
								    <option>10</option>
								    <option>15</option>
								    <option>20</option>
								  </select>
							</div>
						</div>
						<div class="col-xs-1 col-md-1"></div>
						<div class="col-xs-4 col-md-4">
							<p id="kite12total">0</p>
							<input type="hidden" name="kite12totalhidden" id="kite12totalhidden" value="0"/>
							<input type="hidden" name="kite12colorhidden" id="kite12colorhidden" value="<?php echo $color2; ?>"/>
							<input type="hidden" name="kite12namehidden" id="kite12namehidden" value="<?php echo $kite1; ?>"/>
						</div>
					</div>
				</div>
			</div> <!-- Cheel ends -->
	    	
	    	<hr>
	    	
	    	<div class="row">
		    	<div class="col-md-4">
		    		<h4 class="type-titles"><?php echo $kite2; ?><br/><br/><img src="images/rocket.jpg" width=100% height=100%/><br/><br/>₹ 90 / 20 kite</h4>
		    	</div>
		    	<div class="col-md-8">
		    		<br/><br/>
		    		<div class="row">
		    			<div class="col-xs-4 col-md-4"><p>Color</p></div>
		    			<div class="col-xs-4 col-md-4"><p>Qty</p></div>
		    			<div class="col-xs-4 col-md-4"><p>Total</p></div>
		    		</div>
	    			<div class="row">  		
			    		<div class="col-xs-4 col-md-4 colorqtytotal"><i class='fa fa-square fa-2x' style="color:<?php echo $color1; ?>;"></i></div>
			    		<div class="col-xs-1 col-md-1"></div>
			    		<div class="col-xs-2 col-md-2">
					    	<div class="form-group">
								  <select class="form-control" id="selqty21" name="selqty21">
								  	<option>0</option>
								    <option>5</option>
								    <option>10</option>
								    <option>15</option>
								    <option>20</option>
								  </select>
							</div>
						</div>
						<div class="col-xs-1 col-md-1"></div>
						<div class="col-xs-4 col-md-4">
							<p id="kite21total">0</p>
							<input type="hidden" name="kite21totalhidden" id="kite21totalhidden" value="0"/>
							<input type="hidden" name="kite21colorhidden" id="kite21colorhidden" value="<?php echo $color1; ?>"/>
							<input type="hidden" name="kite21namehidden" id="kite21namehidden" value="<?php echo $kite2; ?>"/>
						</div>
					</div>
					<div class="row">  		
			    		<div class="col-xs-4 col-md-4 colorqtytotal"><i class='fa fa-square fa-2x' style="color:<?php echo $color2; ?>;"></i></div>
			    		<div class="col-xs-1 col-md-1"></div>
			    		<div class="col-xs-2 col-md-2">
					    	<div class="form-group">
								  <select class="form-control" id="selqty22" name="selqty22">
								  	<option>0</option>
								    <option>5</option>
								    <option>10</option>
								    <option>15</option>
								    <option>20</option>
								  </select>
							</div>
						</div>
						<div class="col-xs-1 col-md-1"></div>
						<div class="col-xs-4 col-md-4">
							<p id="kite22total">0</p>
							<input type="hidden" name="kite22totalhidden" id="kite22totalhidden" value="0"/>
							<input type="hidden" name="kite22colorhidden" id="kite22colorhidden" value="<?php echo $color2; ?>"/>
							<input type="hidden" name="kite22namehidden" id="kite22namehidden" value="<?php echo $kite2; ?>"/>
						</div>
					</div>
				</div>
			</div> <!-- Rocket ends -->
	   			<i>Similar blocks for other types like: Rocket, dhaal, plastic, etc.....</i>
	   			<br/><br/><br/>
	   
		</div>
    </div>
    
    <div class="panel panel-default">
	    <div class="panel-heading"><h3 class="panel-title">FIRKI</h3></div>
	    <div class="panel-body">
	    	<!-- Firki 1 starts -->
	    	<div class="row">
		    		<div class="col-md-4">
		    			<h4 class="type-titles">1000 Vaar<br/><br/><img src="images/firki.jpg" width = 70% height = 70%/><br/><br/><br/>₹ 200 / firki</h4>
		    		</div>
		    		<div class="col-md-8">
		    			<br/><br/>
		    			<div class="row">  		
				    		<div class="col-xs-4 col-md-4"><i class='fa fa-square fa-2x' style="color:green;"></i></div>
				    		<div class="col-xs-4 col-md-4">
						    	<div class="form-group">
									  <select class="form-control" id="selfir1">
									    <option>0</option>
									    <option>1</option>
									    <option>2</option>
									    <option>3</option>
									  </select>
								</div>
							</div>
							<div class="col-xs-4 col-md-4">
								<p id="firki10001">0</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4 col-md-4"><i class='fa fa-square fa-2x' style="color:red;"></i></div>
				    		<div class="col-xs-4 col-md-4">
						    	<div class="form-group">
									  <select class="form-control" id="selfir2">
									    <option>0</option>
									    <option>1</option>
									    <option>2</option>
									    <option>3</option>
									  </select>
								</div>
							</div>
							<div class="col-xs-4 col-md-4">
								<p id="firki10002">0</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4 col-md-4"><i class='fa fa-square fa-2x' style="color:yellow;"></i></div>
				    		<div class="col-xs-4 col-md-4">
						    	<div class="form-group">
									  <select class="form-control" id="selfir3">
									    <option>0</option>
									    <option>1</option>
									    <option>2</option>
									    <option>3</option>
									  </select>
								</div>
							</div>
							<div class="col-xs-4 col-md-4">
								<p id="firki10003">0</p>
							</div>								
						</div>
					</div>
				</div> <!-- Firki 1 ends -->
	    	<hr>
	    	<i>Similar blocks for other types like: 2000 vaar, 5000 vaar, etc.....</i>
	   			<br/><br/><br/>
	   
	    </div>
    </div>
    
    <div class="panel panel-default">
	    <div class="panel-heading"><h3 class="panel-title">LANTERN</h3></div>
	    <div class="panel-body">
	    	<!-- Lantern 1 starts -->
	    	<div class="row">
		    		<div class="col-md-4">
		    			<h4 class="type-titles">Square shaped<br/><br/><img src="images/lantern.jpg" width = 70% height = 70%/><br/><br/><br/>₹ 25 / lantern</h4>
		    		</div>
		    		<div class="col-md-8">
		    			<br/><br/>
		    			<div class="row">  		
				    		<div class="col-xs-4 col-md-4"><i class='fa fa-square fa-2x' style="color:green;"></i></div>
				    		<div class="col-xs-4 col-md-4">
						    	<div class="form-group">
									  <select class="form-control" id="sellan1">
									  	<option>0</option>
									    <option>5</option>
									    <option>10</option>
									    <option>15</option>
									    <option>20</option>
									  </select>
								</div>
							</div>
							<div class="col-xs-4 col-md-4">
								<p id="lan1">0</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4 col-md-4"><i class='fa fa-square fa-2x' style="color:red;"></i></div>
				    		<div class="col-xs-4 col-md-4">
						    	<div class="form-group">
									  <select class="form-control" id="sellan2">
									  	<option>0</option>
									    <option>5</option>
									    <option>10</option>
									    <option>15</option>
									    <option>20</option>
									  </select>
								</div>
							</div>
							<div class="col-xs-4 col-md-4">
								<p id="lan2">0</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4 col-md-4"><i class='fa fa-square fa-2x' style="color:yellow;"></i></div>
				    		<div class="col-xs-4 col-md-4">
						    	<div class="form-group">
									  <select class="form-control" id="sellan3">
									  	<option>0</option>
									    <option>5</option>
									    <option>10</option>
									    <option>15</option>
									    <option>20</option>
									  </select>
								</div>
							</div>
							<div class="col-xs-4 col-md-4">
								<p id="lan3">0</p>
							</div>								
						</div>
					</div>
				</div> <!-- Lantern 1 ends -->
	    	<hr>
	  		<i>Similar blocks for other types like: heart shaped, etc.....</i>
	   			<br/><br/><br/>
	   
	    </div>
    </div>
    <br/><br/><br/>
   		<div class="form-group">
   			<input type="submit" id="submit" name="submit" value="summary" class="btn btn-primary">
   		</div>
	</form>

    <!-- Trigger the modal with a button 
    <div class="row">
    	<div class="col-md-9"></div>
    	<div class="col-md-3">
			<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal">Submit</button>
			//<?php
			//		include('views/modal.php');
			//?>
		</div>
	</div> -->
	<br/><br/><br/>
	</div>