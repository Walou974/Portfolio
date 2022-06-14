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
				echo "<ul>";
				foreach($euro as $devise => $valeur){
					echo("<li> 1 $devise = $valeur €");
				}
				echo "</ul>"
			?>

			<form method="post" action="convert.php">
				<p>
					<input name="multi" id="entre-conv" type="text">
					<select name="devise" id="select-devise">
						<option value="">Selectionner une devise</option>
						<?php
							foreach($euro as $devise => $valeur){
								echo("<option value='{$devise}'> $devise </option>");
								

							}	
						?>
					</select>
				</p>
				<p>
					<button type="submit"> Convertir </button>
				</p>
			</form>
		</section>
	</body>
</html>