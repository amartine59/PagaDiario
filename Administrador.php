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
<body background="Imagenes/a.jpg">
<center><h1><font color="white" face="Helvética">Panel de Administracion de Clientes</font></h1></center>
<center><a href="index.php"><font color="white" face="arial" size="5">Atras</font><br><br></a></right>
<hr>
	<form  action="Administrador.php" method="post">
		<font color="white" face="Georgia" size="6">Agregar Cliente:</font><br><br>
		<input type="text" placeholder="Digite Identificacion" name="Identificacion"></input>&nbsp<p>
		<input type="text" placeholder="Digite Nombres" name="Nombres"></input>&nbsp<p>
		<input type="text" placeholder="Digite Apellidos" name="Apellidos"></input>&nbsp<p>
	  <input type="text" placeholder="Digite Direccion" name="Direccion"></input>&nbsp<p>
		<input type="text" placeholder="Digite Telefono" name="Telefono"></input>&nbsp<p>

		<font color="white" face="Georgia" size="5">Estado:</font>&nbsp
		<input type="radio" name="group1" value="Activo" checked><font color="white" face="Georgia" size="4"> Activo </font>
		<input type="radio" name="group1" value="Inactivo"><font color="white" face="Georgia" size="4"> Inactivo </font>&nbsp
		<input type="submit" value="Enviar"></input>
	</form>

	<?php
		if (isset($_POST["Identificacion"]) && isset($_POST["Nombres"]) && isset($_POST["Apellidos"]) &&  isset($_POST["Direccion"]) )  {
			if (isset($_POST["Telefono"])  &&  isset($_POST["group1"])) {
				$value = $_POST["group1"];
				$_SESSION["Panel"]->agregarCliente($_POST["Identificacion"], $_POST["Nombres"], $_POST["Apellidos"],$_POST["Direccion"], $_POST["Telefono"], $value);
			}
		}

	?>


	<?php
		echo $_SESSION["Panel"]->imprimir();
	?>
</body>
</html>
