<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.php">
	<title>Form</title>
</head>
<body>
	<?php
	echo "Votre user agent est : ".$_SERVER['HTTP_USER_AGENT']."<br>"."Votre adresse ip est : ".$_SERVER["REMOTE_ADDR"]."<br>"." et votre nom de serveur est : ".$_SERVER['SERVER_NAME'];
	$_SESSION["nom"] = "janvier";
	$_SESSION["prenom"] = "valentin";
	$_SESSION["age"] = "18";
	?>
	<br>
	<a href="/recup.php"><button>Page d'infos</button></a><br>
	<form action="/index.php" method="POST">
		<input type="text" name="user" placeholder=" Utilisateur">
		<input type="password" name="pass" placeholder="Mot de passe">
		<button type="submit">Valider</button>
	</form>
	<?php
	if(!isset($_COOKIE['user']) && !isset($_COOKIE['pass'])){
		setcookie("user",$_POST["user"]);
		setcookie("pass",$_POST["pass"]);
	}
	?>
</body>
</html>