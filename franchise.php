<!DOCTYPE html>
	<html>
		<head>
			<title>Ratatouille</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="style.css" />
		</head>

		<body>
			<div id="bloc_page">
				<?php include('header.php'); ?>
				<section class="formulaire col-xs-12">
					<div class="raw">
						<h1 class="text-center-xs">RATATOUILLE</h1>
					</div>
					<form class="form-horizontal clo-xs-8 col-xs-offset-2">
						<div class="form-group">
							<label class="control-label col-xs-2" for="email">Email:</label>
							<div class="col-xs-6">
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-2" for="nom">Nom:</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="nom" placeholder="Nom">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-2" for="prenom">Prénoms:</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="prenom" placeholder="Prénom">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-2" for="telephone">Téléphone:</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="telephone" placeholder="Téléphone">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-2" for="adresse">Adresse:</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="adresse" placeholder="Adresse">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-2" for="departement">Département:</label>
							<div class="col-xs-2">
								<input type="text" class="form-control" id="departement" placeholder="Département">
							</div>
							<label class="control-label col-xs-1" for="ville">Ville:</label>
							<div class="col-xs-3">
								<input type="text" class="form-control" id="ville" placeholder="Ville">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-2" for="experiences">Epériences: <br/>Cuisine et Management</label>
							<div class="col-xs-6">
								<textarea class="form-control col-xs-6" rows="5" id="experiences" placeholder="Expériences"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-2" for="aExperiences">Autres expériences:</label>
							<div class="col-xs-6">
								<textarea class="form-control col-xs-6" rows="5" id="aExperiences" placeholder="Autres expériences"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-offset-2 col-xs-6">
								<button type="submit" class="btn btn-default">Envoyer</button>
							</div>
						</div>
					</form>
				</section>
				<?php include('footer.php'); ?>			
			</div>
			
		</body>
	</html>
