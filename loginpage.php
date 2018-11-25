<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>La cuisine de ta mère - Se connecter</title>
		<link rel="stylesheet" href="assets/style/main.css">
	</head>
	<body>
	<header>
		<?php include 'assets/redir/navbar.php' ?>
	</header>
		<div id="Connection">
				<h1>Connexion</h1>
			<form action="assets/php/traitement.php" method="post">
				Identifiant: <br/>
				<input type="text" name="identifiant" value="" placeholder="Identifiant ou adresse mail"><br/>
				Mot de passe :<br/>
				<input type="password" name="password" value="" placeholder="Mot de passe"><br/>
				<input type="submit" name="" value="Connection">
			</form>
		</div>
		<div id="inscription">
			<h1>Inscription</h1>
			<form class="" action="assets/php/inscription.php" method="post">
				Identifiant : <br/>
				<input type="text" name="identifiant" value="" placeholder="Identifiant ou adresse mail"><br/>
				Mot de passe : <br/>
				<input type="password" name="password" value="" placeholder="Mot de passe"><br/>
				Confirmer le mot de passe : <br/>
				<input type="password" name="passwordverif" placeholder="Mot de passe" value=""><br/>
				<input type="submit" name="" value="Inscription">
			</form>
		</div>

	</body>
</html>
