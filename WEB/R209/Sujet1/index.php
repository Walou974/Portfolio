<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../Outils/style.css" />
		<title>R209 - Sujet 1</title>
	</head>
	<body>
    <?php 
	$dossier = ".."; 													// pour le nav car fontion listerep a besoin du fichier parent
	include("../menu.php")?>
	<header>
	Module R209 : Web Dynamique
	</header>
	<section>
		
		<h1><?php 
			$tab = explode("/", $_SERVER["PHP_SELF"]) ;	
			// debug($tab);
			echo $tab[2] ; 
			?> 
		:</h1>
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