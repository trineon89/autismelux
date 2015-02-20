<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Média</title>
		<link rel="stylesheet" type="text/css" href="../css/media.css">
		<link rel="stylesheet" type="text/css" href="../css/jquery.mCustomScrollbar.css">
		<meta name="robots" content="noindex, nofollow">
		
	</head>
	<body>
		<?php echo get_all_media() ?>

			<h2 style="margin-bottom:0px;">Vidéos</h2>
			<ul class="rig">
				<li><p>Campagne d'information sur l'Autisme</p></li>
				<li><p>Nordliicht TV: reportage Centre Roger Thelen Beckerich</p></li>
				<li><p>Kulturfabrik: reportage Keramikfabrik Autisme Luxembourg asbl</p></li>
			</ul>-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../incl/jquery-1.11.0.min.js"><\/script>')</script>
	
	<!-- custom scrollbar plugin - http://www.jqueryrain.com/?L_dwB4rN -->
	<script src="../incl/jquery.mCustomScrollbar.concat.min.js"></script>
	
	<script>
		(function($){
			$(window).load(function(){
				
				$(".vert").mCustomScrollbar({
					axis:"yx",
					theme:"minimal-dark",
					scrollbarPosition:"outside",
					advanced:{autoExpandHorizontalScroll:true},
					callbacks:{
						onOverflowY:function(){
						  var opt=$(this).data("mCS").opt;
						  if(opt.mouseWheel.axis!=="y") opt.mouseWheel.axis="y";
						},
						onOverflowX:function(){
						  var opt=$(this).data("mCS").opt;
						  if(opt.mouseWheel.axis!=="x") opt.mouseWheel.axis="x";
						},
					  }
				});
				
			});
		})(jQuery);
	</script>
	</body>
</html>