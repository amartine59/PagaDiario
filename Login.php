<html>
<head>
<title>Ingreso Administrador</title>
</head>
<body background="Imagenes/b.jpg">
<br><br>
<center>
<form>
<table align="middle">
<tr><td colspan="3"><font size="10" color="white" face="Georgia">Ingreso</font></td></tr>
<tr><td rowspan="3"><img src="Imagenes/login.png" width="100" height="100"></td>
<td><font face="Calibri Light"color="white" size="6">Usuario:</font></td><td><input type="text" name="Usuario" required=""> </td> </tr>
<tr></td><td><font face="Calibri Light" color="white" size="6">Contrasena:</font></td><td><input type="password"name="contrasena" required=""></input></td></tr>
<tr><td colspan="3" align="right"><img src="Imagenes/ingresar.png" width="80" height="50"  value="Entrar" onclick=cargar(Usuario,contrasena)></td></tr>
</table>
</form>
<script type="text/javascript">
	function cargar(aa,bb){
	a=new String(aa.value)
	b=new String(bb.value)
	nombre= new String("admi")
	contr= new String("123")
    if (a.length==0 ) {
    	alert("Digite Usuario")
    	aa.focus()
    } else {
    	if (b==0) {
    		alert("Digite Contrasena")
    		bb.focus()

    	} else {
    		if (a.localeCompare(nombre)==1) {
                            alert("Usuario No disponible")
                        } else {
                            if (b.localeCompare(contr)==1) {
                            alert("Contraseña Incorrecta")
                            } else {
                                window.open('Administrador.php','_self')

                            }
                        }
    	}
    }
	}
</script>
</center>
</body>
</html>
