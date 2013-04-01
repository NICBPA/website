<?php define("category", basename(dirname(__FILE__))); include 'global/head.html';?>

<body> <!-- DECLARE THEME VIA "color"-theme as class. Availible themes are "red", "green", "blue", "orange", & if you leave blank the theme is gray. -->

<?php include 'global/nav.php';?>

	<header class="subpage"><h1>Check it out</h1><h2>Our Sources</h2></header> <!-- HEADER OF PAGE -->

<div class="halfcol">

	<div class="box sources red"> <!-- DECLARE COLOR CATEGORY IN CLASS -->
		<figure>
			<h1><a href="#">Early Years</a><span> by Flickr user <a href="#">Ryan Maskell</a></span></h1>
			<img src="_/content/img/history/earlyyears2.jpg">
		</figure>
	</div> <!-- END SOURCED IMG BOX -->

	<div class="box sources green"> <!-- DECLARE COLOR CATEGORY IN CLASS -->
		<figure>
			<h1><a href="#">Early Years</a><span> by Flickr user <a href="#">Ryan Maskell</a></span></h1>
			<img src="_/content/img/history/earlyyears3.jpg">
		</figure>
	</div> <!-- END SOURCED IMG BOX -->

	<div class="box sources blue"> <!-- DECLARE COLOR CATEGORY IN CLASS -->
		<figure>
			<h1><a href="#">Early Years</a><span> by Flickr user <a href="#">Ryan Maskell</a></span></h1>
			<img src="_/content/img/history/earlyyears2.jpg">
		</figure>
	</div> <!-- END SOURCED IMG BOX -->

</div> <!-- END COLUMN ONE -->

<div class="halfcol">

	<div class="box sources blue"> <!-- DECLARE COLOR CATEGORY IN CLASS -->
		<figure>
			<h1><a href="#">Early Years</a><span> by Flickr user <a href="#">Ryan Maskell</a></span></h1>
			<img src="_/content/img/history/earlyyears3.jpg">
		</figure>
	</div> <!-- END SOURCED IMG BOX -->

	<div class="box sources orange"> <!-- DECLARE COLOR CATEGORY IN CLASS -->
		<figure>
			<h1><a href="#">Early Years</a><span> by Flickr user <a href="#">Ryan Maskell</a></span></h1>
			<img src="_/content/img/history/earlyyears2.jpg">
		</figure>
	</div> <!-- END SOURCED IMG BOX -->
	
	<div class="box sources green"> <!-- DECLARE COLOR CATEGORY IN CLASS -->
		<figure>
			<h1><a href="#">Early Years</a><span> by Flickr user <a href="#">Ryan Maskell</a></span></h1>
			<img src="_/content/img/history/earlyyears1.jpg">
		</figure>
	</div> <!-- END SOURCED IMG BOX -->

</div> <!-- END COLUMN TWO -->

<?php include 'global/foot.php';?>