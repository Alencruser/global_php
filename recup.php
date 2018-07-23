<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Voici les informations transmises de la page index : <?php
	echo $_SESSION["nom"]." ".$_SESSION["prenom"]." ".$_SESSION["age"];
	?></p>
	<a href="/index.php"><button>Retour à l'index</button></a>
	<p>Voici les infos stockés dans un cookie : <?php
	echo $_COOKIE["user"]." ".$_COOKIE["pass"];
	?></p>
	<a href="/modify.php"><button>Modifier le compte</button></a>
</body>
</html>