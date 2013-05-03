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
		<?php
		$data = Store::getData();
		$dataLength = count($data);
		?>
		
		<div class="sticky-nav">
			<div>
				<a class="btn btn-left" href=""><span><i class="icon-circle-arrow-left"></i> Previous Rank</span></a>
				<a class="btn btn-right" href=""><span>Next Rank <i class="icon-circle-arrow-right"></i></span></a>
				<span class="rank-output"><span class="data-out"></span> &nbsp;<i class="icon-user"></i></span>
			</div>
		</div>
		
		<header>
			<h1>KSI Hierarchy Ranking Structure</h1>
			<h2>From <strong><?php echo $data[$dataLength - 1]->getName(); ?></strong> To <strong><?php echo $data[0]->getName(); ?></strong></h2>
		</header>
		
		<section>
			<ul>
				<?php foreach($data as $index => $rank) { ?>
					<li>
						<h3>
							<span class="block">
								<span class="pound-sign">#<?php echo $dataLength - $index; ?></span>
								<span id="goto-<?php echo $index; ?>" class="rank-place"><?php echo $rank->getName(); ?></span>
								<i class="icon-user"></i>
							</span>
						</h3>
						<p>
							<?php echo $rank->getDescription(); ?>
						</p>
					</li>
				<?php } ?>
			</ul>
		</section>
		
		
		<section class="about">
			<h2>About KSI</h2>
			<p>
				The KSI Global Gaming Network is the cliché, yet unique result of three men who sat down and planned to begin the greatest gaming community ever produced. 
				Consisting of a special group of young and older individuals that share a common goal bridging the gap, and building leaders for every age group to reinforce their real life work ethics, and goal oriented lifestyles. 
				The cultures here in KSI are limitless, producing leaders from every country, and every language. 
				The members are taught diversity, and live that belief to the fullest, making KSI one of the most diverse communities in the world. 
			</p>
			<p>
				KSI’s leaders live the life in becoming more proficient with their knowledge strength and integrity. 
				KSI’s members can experiment with players from across the world, to meet leaders from every walk of life. 
				The members can learn certain traits from their leaders to mold themselves, producing a fine role-model for future KSI members, and then expressing what they learned while online, and in their workplace or at school. 
				KSI is a learning environment and reinforces their drive, making its members more confident in their leadership, and less reckless with real life relationships. 
			</p>
			<p>
				KSI within the first few months consisted of only 600 members, but now that number has reached a crushing number of 20000.
				KSI has also integrated a new method of adding divisions and ramifying the divisions into squads. 
				Divisions are very unique with a hierarchy of a few key individuals who assist the members in staying organized and making great changes in the good of its members and the division. 
				A division may reach around 1000 members but may be much more. 
				The members are also placed in a squad where they learn everything they need to know, from organizational skills to politics, and even as far as personal relationships. 
				The members, during game play are encouraged to be competitive but are reminded of good sportsmanship and team building concepts. 
			</p>
			<p>
				KSI has members that range from the age of 15-59, where the younger gamers will interact with older gamers, 
				giving them the opportunity to learn to play more maturely, and getting older gamers to interact with the youth, along the way, teaching valuable lessons, and a wide variety of social skills.
				KSI's older members are given a chance to have fun, and give the XBOX LIVE community a much more organized feel. 
				In KSI these members utilize this point in KSI to have the very unique experience of building a global gaming community.
			</p>
		</section>
		
		<footer>
			<div>
				<div>Created by <strong>KSI ViceCaptain</strong> from the KSI Global Gaming Network.</div>
				Download or contribute to the source at <a href="https://github.com/vicecaptain/ksi-rank-structure" target="_blank"><i class="icon-github-alt"></i> https://github.com/vicecaptain/ksi-rank-structure</a>.
			</div>
		</footer>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>