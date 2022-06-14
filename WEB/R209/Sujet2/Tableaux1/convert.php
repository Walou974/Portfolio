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
    $euro=array(	'Dinar algérien' 	=> 0.00916204,
                    'Franc guinéen'		=> 0.000108068,
                    'Livre libanaise' 	=> 0.000479533,
                    'Ringgit malais'	=> 0.224482,
                    'Dirham marocain'	=> 0.0892160,
                    'Euro monégasque'	=> 1,
                    'Rouble russe'		=> 0.0203145,
                    'Franc CFA'		=> 0.00152449,
                    'Dinar tunisien'	=> 0.459187
                );
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
