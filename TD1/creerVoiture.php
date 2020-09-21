<!DOCTYPE html>
<html>
<head>
	<title>CreationVoiture</title>
</head>
<body>
	<?php
	require_once('Voiture.php');
	$marque = $_POST["marque"];
	$couleur = $_POST["couleur"];
	$immatriculation = $_POST["immatriculation"];

	$voiture1 = new Voiture($marque, $couleur, $immatriculation);
	$voiture1->afficher();
	?>
</body>
</html>