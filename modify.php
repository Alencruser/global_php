<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/modify.php" method="POST">
		<input type="text" name="useru" placeholder="User">
		<input type="password" name="passu" placeholder="Pass">
		<button type="submit">Valider</button>
	</form>
	<?php
	if(isset($_POST[useru])&&isset($_POST[passu])){
		setcookie("user",$_POST["useru"]);
		setcookie("pass",$_POST["passu"]);
	}
	?>
	<a href="/recup.php"><button>Page infos</button></a>
	<a href="/index.php"><button>Index</button></a>
</body>
</html>