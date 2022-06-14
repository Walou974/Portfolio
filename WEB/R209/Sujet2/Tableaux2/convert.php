<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>R209 - Exercice 3</title>
	</head>
	<body>
		<!-- L'en-tête -->
		<header>
			<p>Module R209 : Web Dynamique</p>
		</header>
				
		<!-- Le contenu (1 seule section suffit) -->		
		<section>
			<h1>Sujet 2 - Exercice 3</h1>
			<h2>Améloirations</h2>
			<?php
   				include("../../Outils/outils.php");
    			include("cours-devises.php");
    			//debug($_POST);
    			//debug($_POST['multi']);
    			//debug($_POST['devise']);
    			$fin = $_POST['multi'] * $euro[$_POST['devise']];
    			if (empty($_POST['multi']) or empty($_POST['devise'])){
    			    header('Location: index.php');
    			    exit();
    			}
    			else{
    			    echo $_POST['multi']." ".$_POST['devise']." = ".$fin."€";
    			}
            ?>


		</section>
	</body>
</html>
