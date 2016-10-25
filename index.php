<?php
	include 'Panel.php';
	session_start();
	if(!isset($_SESSION["Panel"])){
		$_SESSION["Panel"] = new Panel();
	}
?>

<!DOCTYPE html>
<html>
<head>

	<title>Panel</title>
</head>
<body>
<center><h1><font color="white" face="Georgia" face="8">Panel de Busqueda </font></h1></center>
<center><a href="Login.php"><font color="white" face="Calibri Light" size="4 ">Administracion</font><br><br></a></right>
<hr>
	<body background="Imagenes/fondo.jpg">
	<form action="index.php" method="post">
		<font color="white" face="Georgia" size="6">Buscar Identificacion:</font><br><br>
		<input type="text" placeholder="Digite Identificacion" name="Identificacion"></input>&nbsp
		<input type="submit" value="Buscar"></input>
	</form>

	<?php
		if (isset($_POST["Identificacion"])){
				echo $_SESSION["Panel"]->buscarIdentificacion($_POST["Identificacion"]);
		}

	?>
</body>
</html>
