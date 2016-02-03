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
		<!-- Image zoom links -->
		<link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css"/>
		<style type="text/css">
		    a.fancybox img {
		        border: none;
		        -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
		    } 
		    a.fancybox:hover img {
		        position: relative; z-index: 999; -o-transform: scale(1.03,1.03); -ms-transform: scale(1.03,1.03); -moz-transform: scale(1.03,1.03); -webkit-transform: scale(1.03,1.03); transform: scale(1.03,1.03);
		    }
		</style>
		<!-- Image zoom links end-->
	</head>
	<body>
		<?php include_once("analyticstracking.php") ?>
		<div class="bgimg">
	    <?php
			include('views/terrace_panels.php');
		?>
		<?php
			for($br=0; $br<10; $br++){
					echo '<br/>';
				}
			include('header_footer/footer.php');
		?>	
		</div>
		<!-- Image zoom script start -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
		<script type="text/javascript">
		    $(function($){
		        var addToAll = false;
		        var gallery = false;
		        var titlePosition = 'outside';
		        $(addToAll ? 'img' : 'img.fancybox').each(function(){
		            var $this = $(this);
		            var title = $this.attr('title');
		            var src = $this.attr('data-big') || $this.attr('src');
		            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
		            $this.wrap(a);
		        });
		        if (gallery)
		            $('a.fancybox').attr('rel', 'fancyboxgallery');
		        $('a.fancybox').fancybox({
		            titlePosition: titlePosition
		        });
		    });
		    $.noConflict();
		</script>
		<!-- Image zoom script end -->		
	</body>
</html>