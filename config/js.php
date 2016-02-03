		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function() {
				//Sample click function
				$("#patang").click(function(){
					var test = $(this).attr("href");
				}
				)
				
				$("#compac").click(function(){
					 $(".compackage").prop('checked',false);
					 $(".compackage").prop('disabled', true);
					 
				}) 	
				
				$("#cuspac").click(function(){
					 $(".compackage").prop('disabled', false);
					 
				}) 
				
				$("#selqty11").change(function(){
					var test = $(this).val();
					var test2 = test*80;
					document.getElementById("kite11total").innerHTML = test2;
					document.getElementById("kite11totalhidden").value = test2;
					//document.getElementById("sum_total").innerHTML += document.getElementById("kite1green").innerHTML; SAMPLE SUM
				}) 
				$("#selqty12").change(function(){
					var test = $(this).val();
					var test2 = test*80;
					document.getElementById("kite12total").innerHTML = test2;
					document.getElementById("kite12totalhidden").value = test2;
				}) 
				
				$("#selqty21").change(function(){
					var test = $(this).val();
					var test2 = test*90;
					document.getElementById("kite21total").innerHTML = test2;
					document.getElementById("kite21totalhidden").value = test2;
					//document.getElementById("sum_total").innerHTML += document.getElementById("kite1green").innerHTML; SAMPLE SUM
				}) 
				$("#selqty22").change(function(){
					var test = $(this).val();
					var test2 = test*90;
					document.getElementById("kite22total").innerHTML = test2;
					document.getElementById("kite22totalhidden").value = test2;
				}) 
				
				$("#selfir1").change(function(){
					var test = $(this).val();
					var test2 = test*200;
					document.getElementById("firki10001").innerHTML = test2;
				}) 
				
				$("#selfir2").change(function(){
					var test = $(this).val();
					var test2 = test*200;
					document.getElementById("firki10002").innerHTML = test2;
				}) 
				
				$("#selfir3").change(function(){
					var test = $(this).val();
					var test2 = test*200;
					document.getElementById("firki10003").innerHTML = test2;
				}) 
				
				$("#sellan1").change(function(){
					var test = $(this).val();
					var test2 = test*25;
					document.getElementById("lan1").innerHTML = test2;
				}) 
				
				$("#sellan2").change(function(){
					var test = $(this).val();
					var test2 = test*25;
					document.getElementById("lan2").innerHTML = test2;
				}) 
				
				$("#sellan3").change(function(){
					var test = $(this).val();
					var test2 = test*25;
					document.getElementById("lan3").innerHTML = test2;
				}) 	
			});
  			
		</script>