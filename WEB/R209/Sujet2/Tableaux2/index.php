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
			<h2>Cours de l'Euro</h2>
			<?php
				include("cours-devises.php");
				echo "<ul>";
				foreach($euro as $devise => $valeur){
					echo("<li> 1 $devise = $valeur €");
				}
				echo "</ul>"
			?>
			<h2>Améliorations </h2> 
			<form method="post" action="convert.php">
				<p>
					Montant <input name="multi" id="entre-conv" type="text">
				</p>
				<p>
					Monnaie <select name="devise" id="select-devise">
					<option value="">Selectionner une devise</option>
						<?php
							foreach($euro as $devise => $valeur){
								echo("<option value='{$devise}'> $devise </option>");
								

							}	
						?>
					</select>
				</p>
				<p>
					<button type="submit"> Convertir en euros</button>
				</p>
			</form>
		</section>
	</body>
</html>