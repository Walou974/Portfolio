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
							include("../../Outils/outils.php");
							include("../connexion/base.php");
							$sql = "SELECT devise FROM EURO";
							$req = $bd->prepare($sql);
							$req->execute();
							$enr = $req->fetchall();
							$req->closeCursor();
							// debug($enr);
							foreach($enr as $res){
								// debug($res);
								echo("<option value='".$res[0]."'> ".$res[0]." </option>");
								

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