<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>R209 - exercice 2</title>
	</head>
	<body>
		<!-- L'en-tête -->
		<header>
			<p>Module R209 : Web Dynamique</p>
		</header>
				
		<!-- Le contenu (1 seule section suffit) -->		
		<section>
			<h1>Sujet 2 - Exercice 2</h1>
			<?php
    include("../../Outils/outils.php");
    include("../connexion/base.php");
    // debug($_POST);
    // debug($_POST['multi']);
    // debug($_POST['devise']);

    $sql = "SELECT devise, valeur FROM `EURO` WHERE devise='".$_POST['devise']."'";
	$req = $bd->prepare($sql);
	$req->execute();
	$enr = $req->fetchall();
	$req->closeCursor();
    // debug($enr);
    $res = $enr[0];
    $fin = $_POST['multi'] * $res['valeur'];
    if (empty($_POST['multi']) || empty($_POST['devise'])){
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
