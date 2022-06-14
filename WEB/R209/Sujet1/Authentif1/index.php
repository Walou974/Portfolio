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
			<p>Veuillez vous identifier</p>
			<form method="POST" action="./connex.php">
				<p>	<label for="login">Login</label>
					<input id="login" name="login" type="text" required autofocus/>
				</p>
				<p>	<label for="mdp">Mot de passe</label>
					<input id="mdp" name="mdp" type="password" required />
				</p>
				<p>	
					<button id="envoi" name="envoi" type="submit" value="envoi">Connnexion</button> 
				</p>
			</form>
		</section>
	</body>
</html>