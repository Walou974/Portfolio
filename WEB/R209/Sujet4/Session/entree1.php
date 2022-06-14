<?php
		session_start();
		if (isset($_POST['login']) && isset($_POST['mdp'])){ // verifie que les variables $_POST existent
			if ($_POST['login']!="boss" || $_POST['mdp']!= "boss") { // verifie si le login/mdp differents de boss 
				header('Location:index.php?msg=err');
				exit();
				
			}
			else{
				$_SESSION["auth"] = 1; // varaiable de session authantificatrice 
				// echo $_SESSION["auth"];
			}
		}
		
		else{
			if(isset($_SESSION["auth"]) == false){
				header('Location:index.php?msg=err');
				exit();
			}

		}
?>
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

		<!-- Un menu -->
<?php
	include("menu.php");
?>
		
		<!-- La section -->
		<section>
			<h1>Entrée 1</h1>
			
			<p>Bla bla bla</p>
		</section>
	</body>
</html>