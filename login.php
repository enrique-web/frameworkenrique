<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<head>
	<title>INICIAR SESION</title>
		<style type="text/css">
		* {
			font-size: 100%;
			font-family: Poppins;
			color: white;
			text-decoration: none;
		}

		h1 { font-size: 1.5em; }
		body {
			background-attachment: fixed;
			margin: 0;
			background: #23374d ;
		}

		#content {
			background-attachment: fixed;
			background: #1089ff;
			padding: 60px;
			margin: 100px auto;
			max-width: 600px;
		}


		#content {
			-webkit-box-shadow:  1px 1px 5px 3px rgba(0, 0, 0, 0.2);
     		box-shadow:  1px 1px 5px 3px rgba(0, 0, 0, 0.2);
		}
		footer{
			align-self: flex-end;
			background-color: rgba(120,120,120,.0);
			line-height: 3;
			text-align: center;
			width: 100%;

			form {
   			 display: inline-block;
   			 text-align: center;
			}
		}
		.button {
			  background-color: #F73859;
			  border: none;
			  color: white;
			  padding: 10px 100px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			  font-size: 16px;
			  margin: 4px 2px;
			  cursor: pointer;
			  border-radius: 12px;
		  width: 100%;
		}
		input[type=text], select {
			  width: 100%;
			  padding: 8px 20px;
			  margin: 5px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  border-radius: 4px;
			  box-sizing: border-box;

			  font-size: 100%;
			  font-family: Poppins;
			  color: black;
		      text-decoration: none;
		}
		#contrasena{
			  width: 100%;
			  padding: 8px 20px;
			  margin: 5px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  border-radius: 4px;
			  box-sizing: border-box;

			  font-size: 100%;
			  font-family: Poppins;
			  color: black;
		      text-decoration: none;
		}
	</style>

	<script type="text/javascript">
		function validar(){

			var usuario = document.forms.formulario.usuario.value;
			var contra = document.forms.formulario.contrasena.value;
			var tipo;
			if(usuario=="admin" && contra == "admin"){			
				sessionStorage.setItem("tipo", "admin");
				window.location.href = 'index.php';

			}else if(usuario=="cliente" && contra == "cliente"){
				sessionStorage.setItem("tipo", "cliente");
				window.location.href = 'index.php';

			}else if(usuario== "" || contra == ""){
				alert("Llene todos los campos");
			}else{
				alert("usuario / contraseña incorrecto");
			}

		}
	</script>
</head>
<body >
	<div id="content" align="center">
		<h1>INICIAR SESIÓN</h1>
		<?php session_start(); ?>
		<br>
		<img src="user.png" width="200" height="200">
		<br>
		<br>	
		    <form  name="formulario" method="post" action="javascript:validar()">
			      <input type="text" name="usuario" id="usuario" placeholder="Ingrese usuario">
			      <br>
			      <br>
			      <input type="password" name="contrasena" id="contrasena" placeholder="Ingrese contraseña">
			      <br>
			      <br>
				  <input type="submit" name="btnIngresar" class="button" id="btnIngresar" value="INGRESAR">
				  <br>
		    </form>
	</div>
</body>
</html>