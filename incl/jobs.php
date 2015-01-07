<html>
	<head>
		<meta charset="UTF-8">
		<title>Média</title>
		<link rel="stylesheet" type="text/css" href="../css/jobs.css">
		<meta name="robots" content="noindex, nofollow">
	</head>
	<body>
		<div id="two-columns" class="grid-container">
			<?php 
				if(isset($_GET['offer'] ))
				{
					echo get_job($_GET['offer']);
				} else {
				?> <h2 style="margin-bottom:0px;">Jobs</h2> <?
					echo get_jobs();
				}
				?>
	</body>
</html>