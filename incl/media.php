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
		<!--<div id="two-columns" class="grid-container"> -->
		<?php echo get_all_media() ?>
		
			<!--<h2 style="margin-bottom:0px;">Infoautisme</h2>		ADDING SCROLL LIST
			<ul class="rig">
				<li><img src="./img/upload/infoautisme/maquette01.jpg" /><p>Infoautisme 1</p></li>
				<li><img src="./img/upload/infoautisme/maquette02.jpg" /></li>
				<li><img src="./img/upload/infoautisme/maquette03.jpg" /></li>
				<li><img src="./img/upload/infoautisme/maquette04.jpg" /></li>
				<li><img src="./img/upload/infoautisme/maquette05.jpg" /></li>
				<li><img src="./img/upload/infoautisme/maquette06.jpg" /></li>
				<li><img src="./img/upload/infoautisme/maquette07.jpg" /></li>
				<li><img src="./img/upload/infoautisme/maquette08.jpg" /></li>
				<li><img src="./img/upload/infoautisme/maquette09.jpg" /></li>
				<li><img src="./img/upload/infoautisme/maquette10.jpg" /></li>
				<li><img src="./img/upload/infoautisme/maquette11.jpg" /></li>
				<li><img src="./img/upload/infoautisme/maquette12.jpg" /></li>
				<li><img src="./img/upload/infoautisme/maquette13.jpg" /></li>
				<li><img src="./img/upload/infoautisme/maquette14.jpg" /></li>
				<li><img src="./img/upload/infoautisme/maquette15.jpg" /></li>
				<li><img src="./img/upload/infoautisme/maquette16.jpg" /></li>
			</ul>
			
			<h2 style="margin-bottom:0px;">Vidéos</h2>
			<ul class="rig">
				<li><p>Campagne d'information sur l'Autisme</p></li>
				<li><p>Nordliicht TV: reportage Centre Roger Thelen Beckerich</p></li>
				<li><p>Kulturfabrik: reportage Keramikfabrik Autisme Luxembourg asbl</p></li>
			</ul>-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../incl/jquery-1.11.0.min.js"><\/script>')</script>
	
	<!-- custom scrollbar plugin -->
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