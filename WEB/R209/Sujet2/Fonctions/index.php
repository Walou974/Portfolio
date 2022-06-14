<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>R209 - Fonction Debug</title>
	</head>
	<body>
	
	<header>
    Module R209 : Web Dynamique
	</header>
	<section>

		<h2>Fonction débug : </h2>
		<?php
			include("../../Outils/outils.php");

			$un = 1; //4.1 : variable simple 
			$tab_s = array("test", "test2", "test3"); //4.2 : tableau sequentiel
			$tab_a = array("a" => 1, "b" => 2, "c" => 3, "d" => 4); //4.3 : tableau associatif

		?>
		<h3>Variable simple :</h3>	<?php debug($un); //4.1 : variable simple ?>
		<h3>Tableau séquentiel :</h3>	<?php debug($tab_s); //4.2 : tableau sequentiel ?>
		<h3>Tableau associatif : </h3>	<?php debug($tab_a); //4.3 : tableau associatif ?>
	
	</section>
		
	</body>
</html>