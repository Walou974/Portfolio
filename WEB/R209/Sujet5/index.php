<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../Outils/style.css" />
		<title>R209 - Sujet 4</title>
	</head>
	<body>
    <?php
	$dossier = "..";													// pour le nav car fontion listerep a besoin du fichier parent
	include("../menu.php")?>
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
		?> :</h1>
		<?php
            $lrep = listeRep(".");
                        // debug($lrep);
            echo("<ul>");
            for ($i = 2; $i < count($lrep)-1; $i++) {
                echo("<li> Voir le répertoire <a href='./$lrep[$i]'>");
                echo "$lrep[$i] \n";									// . et .. correspondent respectivement aux dossiers actuel et père				
                echo("</a></li>");
            }
            echo("</ul>");
		?>
	</section>
		
	</body>
</html>