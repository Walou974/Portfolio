<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>R209</title>
	</head>
	<body>
		<!-- L'en-tête -->
		<header>
			<p>Module R209 : Web Dynamique</p>
		</header>
				
		<!-- Le contenu (1 seule section suffit) -->		
		<section>
        <h1>Sujet 1 - Exercice 2</h1>
            <?php
                if ($_POST['login'] == "boss" && $_POST['mdp'] == "boss") {
                    echo ("Bonjour ".$_POST['login'].". Nous sommes le ".date('d')."/".date('m')."/".date('y'));
                }
                else {
                    ?>
                Tu dois être authentifié pour connaître la date ! Retourne au <a href="./index.html">formulaire</a> 
                    <?php
                }
                $test = htmlspecialchars($_POST['login']);
                
              ?>  
		</section>
	</body>
</html>