<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<head>
	<title>INICIO</title>
	<style>
	ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  background-color: #1089ff;
		}

	li {
		  float: left;
		}

	li a {
	  	display: block;
	  	color: white;
	  	text-align: center;
	  	padding: 20px 16px;
	  	font-size: 150%;
	  	text-decoration: none;
		}

	li a:hover:not(.active) {
	  	background-color: #111;
		}

	.tipo{	  	

		display: block;
	  	color: white;
	  	text-align: center;
	  	padding: 20px 16px;
	  	font-size: 150%;
	  	text-decoration: none;}

	.active {
	  	background-color: #4CAF50;
		}

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
	.contacto{
		font-size: 1.5em;
		font-family: Poppins;
		color: white;
		text-decoration: none;
	}
</style>
<script type="text/javascript">

	window.onload = function() {
		document.getElementById('contenido').innerHTML =`
	  		<br>
			<div align="center">
			    <img src="logo.png" width="1754‬" height="850">
			</div>
	  	`
		var tipo = sessionStorage.getItem("tipo");
		if(tipo == "admin"){	
			  	document.getElementById('nav').innerHTML =`
					<ul>
					<li><a href="javascript:inicio()">Inicio</a></li>
					<li><a href="javascript:producto()">Productos</a></li>
					<li><a href="javascript:contacto()">Contacto</a></li>
					<li><a href="javascript:dashboard()">Dashboard</a></li>
					<li style="float:right"><a class="active" href="javascript:cerrarSesion()">Cerrar Sesion</a></li>
					<h style="float:right" class="tipo">Administrador</li>
					</ul>
			  	`
		}else if(tipo == "cliente"){
			  	document.getElementById('nav').innerHTML =`
					<ul>
					<li><a href="javascript:inicio()">Inicio</a></li>
					<li><a href="javascript:producto()">Productos</a></li>
					<li><a href="javascript:contacto()">Contacto</a></li>
					<li style="float:right"><a class="active" href="javascript:cerrarSesion()">Cerrar Sesion</a></li>
					<h style="float:right" class="tipo">Cliente</li>
					</ul>
			  	`
		}else{
			  	document.getElementById('nav').innerHTML =`
					<ul>
					<li><a href="javascript:inicio()">Inicio</a></li>
					<li><a href="javascript:contacto()">Contacto</a></li>
					<li style="float:right"><a class="active" href="login.php">Iniciar Sesion</a></li>
					<h style="float:right" class="tipo">Visitante</li>
					</ul>
			  	`			
		}
	};

	function producto(){
	  	document.getElementById('contenido').innerHTML =`
	  		<br>
			<div align="center">
			    <img src="catalogo.jpg" width="1180" height="842">
			</div>
	  	`
	}	
	function contacto(){
	  	document.getElementById('contenido').innerHTML =`
	  		<br>
			<div align="center">
			    <br>
			    <br>
			    <img src="fb.png" width="100" height="100"><br>
			    <h1><a href="https://www.facebook.com/enrique.bensons" class="contacto">FACEBOOK</a></h1>
			    <br>
			    <br>
			    <img src="wa.png" width="100" height="100">
			    <h1 class="contacto"> 52 1 961 200 2952</h1>
			</div>
	  	`
	}
	function inicio(){
	  	document.getElementById('contenido').innerHTML =`
	  		<br>
			<div align="center">
			    <img src="logo.png" width="1754‬" height="850">
			</div>
	  	`
	}
	function dashboard(){
	  	document.getElementById('contenido').innerHTML =`
	  		<br>
	  		<br>
			<div align="center">
			    <img src="d1.png" width="600" height="300">
			    <img src="d2.png" width="600" height="300"><br>
			    <img src="d3.png" width="1200" height="400">
			</div>
	  	`
	}
	function cerrarSesion(){
		if (confirm("¿Desea cerrar sesión?")) {
    		sessionStorage.clear();
	   		window.location.href = 'index.php';
		}else{}
	}
</script>
</head>
<body>
<div id="nav">


</div>

<div id="contenido">

</div>

</body>
</html>