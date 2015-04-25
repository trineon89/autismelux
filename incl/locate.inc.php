<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Welcome!</title>
	<meta charset="utf-8"> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="noindex" />
	<style>
	#map-canvas {
        height: 425px;
        margin: 0px;
        padding: 0px
    }
	  #map-canvas h3,#map-canvas p {
	    font-family: 'Open Sans', sans-serif;
		color: #233477;
	}
	#map-canvas p {
		float: left;
		width:50%;
	}
	.bginfobox {
		
		padding:5px;
		display:inline-block;
	}
	div[style*="z-index: -1"] {
		background-color:blue !important;
	}
	</style>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
	<script> <!-- GMaps API init -->
	function initialize() {
		var locations = [
			['Autisme Luxembourg asbl - Centre Roger Thelen', 49.7245023, 5.8997715, 1],
			['Autisme Luxembourg asbl - Keramikfabrik', 49.5040619, 5.9878759, 2],
			['Autisme Luxembourg asbl - C.I.A.', 49.6164579, 6.2193779, 3],
			['Autisme Luxembourg asbl - C.I.R.P.A.', 49.6025743, 6.1163982, 4],
			['Autisme Luxembourg asbl - Boxhorn', 50.08373049999999, 5.9903546, 5],
			['Autisme Luxembourg asbl - Weiler-la-Tour', 49.54287309999999, 6.1998456, 6]
		];
		//CRT
		locations[0][0]="<div class=\"bginfobox\"><h3>"+locations[0][0]+"</h3><p>1 rue Jos Seyler<br/>8522 Beckerich</p><p><i class=\"fa fa-phone fa-lg\"></i> 266 233<br/><i class=\"fa fa-fax fa-lg\"></i> 266 233-33</p></div>";
		//KERAMIK
		locations[1][0]="<div class=\"bginfobox\"><h3>"+locations[1][0]+"</h3><p>116, route de Luxembourg<br/>4221 Esch-sur-Alzette</p><p><i class=\"fa fa-phone fa-lg\"></i> 265 503-92<br/><i class=\"fa fa-fax fa-lg\"></i> 265 523-92</p></div>";
		//CIA
		locations[2][0]="<div class=\"bginfobox\"><h3>"+locations[2][0]+"</h3><p>29-31, rue Principale<br/>5240 Sandweiler</p><p><i class=\"fa fa-phone fa-lg\"></i> 263 501-51<br/></p></div>";
		//CIRPA
		locations[3][0]="<div class=\"bginfobox\"><h3>"+locations[3][0]+"</h3><p>33, rue Antoine Meyer<br/>2153 Luxembourg</p><p><i class=\"fa fa-phone fa-lg\"></i> 250 220<br/></p></div>";
		//Boxhorn
		locations[4][0]="<div class=\"bginfobox\"><h3>"+locations[4][0]+"</h3></div>";
		//Weiler-la-tour
		locations[5][0]="<div class=\"bginfobox\"><h3>"+locations[5][0]+"</h3></div>";
		
		var map = new google.maps.Map(document.getElementById('map-canvas'), {
			zoom: 9,
			center: new google.maps.LatLng(49.825,  6.1),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
	  
		var infowindow = new google.maps.InfoWindow();
		var marker, i;
	
		for (i = 0; i < locations.length; i++) {  
		  marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map
		  });

		  google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
			  infowindow.setContent(locations[i][0]);
			  infowindow.open(map, marker);
			}
		  })(marker, i));
		}
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>
<body>	
<header style="font-size: 2em;font-family: 'Open Sans Condensed', sans-serif; text-align:center;">Nous localisez - Autisme Luxembourg asbl</header>
	 <!-- GMap -->
		<!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2579.271567288394!2d5.899687999999999!3d49.724514!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47eaade0121c6011%3A0x51ef380e63d2139d!2sAutisme+Luxembourg+Asbl!5e0!3m2!1sde!2sde!4v1410443969301" width="888" height="300" frameborder="0" style="border:0"></iframe>-->
		<div id="map-canvas"></div>
</body>
</html>
