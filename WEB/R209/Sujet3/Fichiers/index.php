<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>R209 - Fonction listeRep</title>
	</head>
	<body>

	<header>
	Module R209 : Web Dynamique
	</header>
	<section>
		<h1>Sujet 3 -Exercice 1</h1>
		<h2>Contenu de mon répertoire R209 :</h2>
		<?php
			include("../../Outils/outils.php");
			$lrep = listeRep("..");
										// debug($lrep);
			echo("<ul>");
			foreach($lrep as $sous){
				echo("<li>");
				echo "$sous \n";		// . et .. correspondent respectivement aux dossiers actuel et père				
				echo("</li>");
			}
			echo("</ul>");
		?>
	</section>
		
	</body>
</html>