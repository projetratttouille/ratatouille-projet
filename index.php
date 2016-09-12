<!DOCTYPE html>
	<html>
		<head>
			<title>Ratatouille</title>
			<meta http-equiv="content-type" content="text/html" charset="utf-8" />
			<script type="text/javascript" src="ratatouille.js"></script>
			<!-- Intégration de bootsrap css en CDN -->
			<test compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

			<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
			<link rel="stylesheet" href="style.css" />

		</head>

		<body>
			<div id="bloc_page">
				<?php include('header.php'); ?>

				<section class="container">
					<div class="row top10"><img id="presResto" src="images/ratatouille.png" class="col-sm-12"/></div>
					<div class="row top10">
						<p id="textResto" style="text-align: center; color: white;">Les restaurants ratatouille, etc...</p>
					</div>
					<div class="row top10">
							<img id="ratatouille" src="images/mini-ratatouille.png" class='col-sm-3' onclick="restoClick('ratatouille');"/>
							<img id="laloupe" src="images/mini-laloupe.png" class='col-sm-3' onclick="restoClick('laloupe');"/>
							<img id="lyon" src="images/mini-lyon.png" class='col-sm-3' onclick="restoClick('lyon');"/>
							<img id="bordeaux" src="images/mini-bordeaux.png" class='col-sm-3' onclick="restoClick('bordeaux');"/>
					</div>
				</section>
				<?php include('footer.php'); ?>
			</div>

		</body>
</html>
<script>init();</script>
