<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Perfil Profesional</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="indexlinear.html">Homepage</a></li>
						<li><a href="profesional.html">Perfil Profesional</a></li>
						<li><a href="ppersonal.html">Perfil Personal</a></li>
						<li><a href="otros.html">Otros</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Bienvenidos a Soluciones JJ</a></h1>
					<span class="tag">By J. Jontan Rojas R.</span>
				</div>
			</div>
		</div>

	<!-- Featured -->
		<div id="featured">
			<div class="container">
				<header>
					<h2>Welcome to Solutions JJ</h2>
				</header>
				<p>This is a <strong>Page</strong>, a responsive HTML5 site for Inserte your Personal Dates, where other User can see you profile and look your work capacity. Don't worry your dates will be security xD.</p>
				<hr />
				<div class="row">
				<form name="datos" method="GET" action="gracias.php">
					<div class="centrarDiv">
					<section class="4u" id="13">
						<span class="pennant"><span class="fa fa-briefcase"></span></span>
						<h3>Informacion Basica</h3>
						<div class="izquierdo2">
							<strong><label class="izquierdo">Nombres:</label></strong><br>
							<input  type="search" name="nombre" placeholder="Ingrese sus Nombres" size="30" <?php if ((isset($_GET['nombre'])) && $_GET['nombre']=="error") echo "class='eror'";?>
						</div>
						<div class="izquierdo2">
							<strong><label class="izquierdo">Apellidos:</label></strong><br>
							<input type="text" name="apellido" placeholder="Ingrese sus Apellidos" size="30" <?php if ((isset($_GET['apellido'])) && $_GET['apellido']=="error") echo "class='eror'";?>
						</div>
						<div class="izquierdo2">
							<strong><label class="izquierdo">Telefono de Contacto:</label></strong><br>
							<input type="number" name="telefono" placeholder="Ingrese sus Telefono" size="30"  <?php if ((isset($_GET['telefono'])) && $_GET['telefono']=="error") echo "class='eror'";?>
						</div>
						<div class="izquierdo2">
							<strong><label class="izquierdo">Corrreo Electronico:</label></strong><br>
							<input type="text" name="correo" placeholder="ejemplo@ejemplo.com" size="30" <?php if ((isset($_GET['correo'])) && $_GET['correo']=="error") echo "class='eror'";?>
						</div>
						<div class="izquierdo2">
							<strong><label class="izquierdo">Asunto:</label></strong><br>
							<input type="text" name="asunto" placeholder="Asunto..." size="19"<?php if ((isset($_GET['asunto'])) && $_GET['asunto']=="error") echo "class='eror'";?>
						</div>
						<br>
						<div class="izquierdo2">
							<textarea name="textoAsunto" rows="12" cols="28" placeholder="Escriba sus Inquitudes" size="30" <?php if ((isset($_GET['textoAsunto'])) && $_GET['textoAsunto']=="error") echo "class='eror'";?></textarea>
						</div>
<!-- <?php require_once("file");  ?> -->
					</section>
					
						<div class="container">
							<a href="personal.html#13" class="button button-style1">Back!</a>
							<a href="indexlinear.html" class="button button-style1">Home</a>
							<input class="button button-style1" type="submit" name="datos" value="Send Em@ail">
							<!-- <a href="gracias.php#13" class="button button-style1">Send Em@ail</a> -->
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">

				
			</div>
		</div>

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;The history of progress is written with the blood of men and women who have dared to embrace an unpopular cause, as, for example, the black man to the right of his body, or the right of the woman to his soul...&rdquo;</blockquote>
				</section>
			</div>
		</div>

	<!-- Footer -->
	<div id="footer">
		<div class="container">
			<section>
				<header>
					<h2>Get in touch</h2>
					<span class="byline">And explorer our new wolrd</span>
				</header>
				<ul class="contact">
					<li><a href="https://twitter.com/@jrjr_13" class="fa fa-twitter"><span>Twitter</span></a></li>
					<li class="active"><a href="https://es-la.facebook.com/jjrr90" class="fa fa-facebook"><span>Facebook</span></a></li>
					<li><a href="www.google.com" class="fa fa-tumblr"><span>Google+</span></a></li>
				</ul>
			</section>
		</div>
	</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: by Solutiones JJ "Soluciones a tu Medida" @copyright Todo los derecechos Recervados xD</a>
			</div>
		</div>

	</body>
</html>