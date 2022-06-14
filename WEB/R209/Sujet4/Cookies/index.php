<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>R209 - Sujet 4</title>
	</head>
	<body>
    <?php
	$dossier = "../..";													// pour le nav car fontion listerep a besoin du fichier parent
	include("../../menu.php")?>
	<header>
	Module R209 : Web Dynamique
	</header>
	<section>
		<?php 
		/*echo "<pre>";
		print_r($_SERVER);												// PHP_SELF affiche le chemin du fichier (ex : /edsa-R209/Sujet4/index.php (serveur local))
		echo "</pre>" ;*/
		?>
		<h1><?php 
		$tab = explode("/", $_SERVER["PHP_SELF"]) ;	
		// debug($tab);
		echo $tab[2] ; 
		?> - Exercice 3</h1>
		<?php
            echo "<p>Bonjour nous sommes le ".date("d/m/y")." à ".date("H:m:s")."</p>";
			
			if(isset($_COOKIE['passage'])){
				echo "<p>Ta dernière visite sur cette page date du ".$_COOKIE['passage'];
				setcookie("passage",date("H:m:s"), time()+3600);
			}
			else{
				echo "Bienvene sur cette page.";
				setcookie("passage",date("H:m:s"), time()+3600);
			}
		?>
	</section>
		
	</body>
</html>