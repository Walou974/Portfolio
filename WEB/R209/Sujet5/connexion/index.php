<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>Module M2105</title>
	</head>
	<body>
		<!-- L'en-tête -->
		<header>
			<p>Module M2105 : Web Dynamique</p>
		</header>
		
		
		<!-- Le menu inclus depuis menu.html -->
<?php
	$dossier = "../..";
	include ("../../menu.php");
?>
		
		<!-- Le contenu de la page (1 seule section suffit) -->		
		<section>
<!-- Début du HTML généré par PHP -->
<?php	
	$chemin=explode("/",$_SERVER['PHP_SELF']);
	echo "<h1>".$chemin[count($chemin)-3]." - ".$chemin[count($chemin)-2]."</h1>\n";
?>		
<!-- Fin du HTML généré par PHP -->

			

<!------------- À COMPLÉTER ------------->
<ul>
	<?php 
		include("base.php");
		$sql = "SELECT devise, valeur FROM `EURO`";
		$req = $bd->prepare($sql);
		$req->execute();
		$enr = $req->fetchall();
		$req->closeCursor();
		//debug($enr);

		foreach($enr as $res){
			echo "<li>".$res['devise']." = ".$res['valeur']."</li>";
		}

	?>
</ul>





<!--------------------------------------->


		</section>
		
	</body>
</html>