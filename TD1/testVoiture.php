<!DOCTYPE html>
<html>
<head>
	<title>testVoiture.php</title>
</head>
<body>
	<?php
	require_once('Voiture.php');
	$voiture1 = new Voiture('Renault', 'Rouge', '156GR84');
	$voiture1->afficher();
	?>

</body>
</html>