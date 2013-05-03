<?php 
include "app.php";
?><!doctype html>
<html>
	<head>
		<title>KSI Rank Structure</title>
		<meta charset="utf-8" />
		<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css" />
		<link href="css/app.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header>
			<h1>KSI Hierarchy Ranking Structure</h1>
			<h2>From Private To Chief of Staff</h2>
		</header>
		
		<section>
			<ul>
				<?php foreach(Store::getData() as $rank) { ?>
					<li>
						<?php echo $rank->getName(); ?>
						<br />
						<?php echo $rank->getDescription(); ?>
					</li>
				<?php } ?>
			</ul>
			
			<a href="">Previous Rank</a>
			<a href="">Next Rank</a>
		</section>
		
		<footer>
			Created by KSI ViceCaptain from the KSI Global Gaming Network.<br />
			Download the source at <a href="https://github.com/vicecaptain/ksi-rank-structure" target="_blank">https://github.com/vicecaptain/ksi-rank-structure</a>
		</footer>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>