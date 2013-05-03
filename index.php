<?php 
include "app.php";
?><!doctype html>
<html>
	<head>
		<title>KSI Rank Structure</title>
		<meta charset="utf-8" />
		<link href="//yui.yahooapis.com/3.10.0/build/cssreset/cssreset-min.css" rel="stylesheet" type="text/css" />
		<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css" />
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="css/app.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header>
			<h1>KSI Hierarchy Ranking Structure</h1>
			<h2>From <strong>Private</strong> To <strong>Chief of Staff</strong></h2>
		</header>
		
		<section>
			<ul>
				<?php foreach(Store::getData() as $index => $rank) { ?>
					<li>
						<h3><span>#<?php echo count(Store::getData()) - ($index); ?> <?php echo $rank->getName(); ?></span></h3>
						<p>
							<?php echo $rank->getDescription(); ?>
						</p>
					</li>
				<?php } ?>
			</ul>
			
			<a href="">Previous Rank</a>
			<a href="">Next Rank</a>
		</section>
		
		<footer>
			<div>
				<div>Created by <strong>KSI ViceCaptain</strong> from the KSI Global Gaming Network.</div>
				Download or contribute to the source at <a href="https://github.com/vicecaptain/ksi-rank-structure" target="_blank"><i class="icon-github-alt"></i> https://github.com/vicecaptain/ksi-rank-structure</a>
			</div>
		</footer>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>