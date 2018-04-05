<!DOCTYPE HTML>

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
					<h1><a href="#">Sr@ <?php echo $_GET['nombre']." ".$_GET['apellido'];  ?></a></h1>
					<span class="tag">Enviado Satisfactoriamente!!!.</span>
				</div>
			</div>
		</div>
<?php 
$msj="";
function validaArea($textarea){
	$boleano=true;
	//if (preg_match("/^\D+$/", $_GET[$textarea])) {
	if (preg_match("/[a-z][0-9]/", $_GET[$textarea]) || preg_match("/[0-9][a-z]/", $_GET[$textarea]) || preg_match("/[a-z]/", $_GET[$textarea]) || preg_match("/[A-Z]/", $_GET[$textarea]) ) {
			return $_GET[$textarea];

		}else{
			 //header('location:formulario.php?textoAsunto=error');
			$GLOBALS['msj'].=$textarea."=error&";
			return false;
		}

}
function validaCamposTexto($campo){
	$boleano=true;
	if (preg_match("/^\D+$/", $_GET[$campo])) {
			return $_GET[$campo];

		}else{
			$GLOBALS['msj'].=$campo."=error&";
			return false;
		}
}
function validaNumeros($numero){
	$boleano=true;
	if (preg_match("/^\d+$/",$_GET[$numero]) || preg_match("/ \d+$/",$_GET[$numero])) {
			return $_GET[$numero];

		}else{
			$GLOBALS['msj'].=$numero."=error&";
			return false;
		}
}
function validaEmail($email){
	$boleano=true;
if (isset($_GET['email'])) {

	if (preg_match("/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i",
	$texto)) {

    	$espacios=explode("@", $texto);
			
		if (sizeof($espacios)>2) {
			$cantidad=sizeof($espacios)-1;
			$GLOBALS['msj'].=$email."=error&";
			return false;
		}else{
			$espacios2=explode(".", $espacios[1]);

			if (sizeof($espacios2)>2) {
				for ($j=1; $j < sizeof($espacios2); $j++) { 
					$extencion.=".".$espacios2[$j];
				}
				if (sizeof($extencion)>4) {
					$GLOBALS['msj'].=$email."=error&";
					return false;
				}
			}else{
				$extencion=$espacios2[1];
			}

			// $dominio=$espacios2[0];
			// echo "El Dominio es: '".$dominio."'<br>";
			// echo "La Extencion es: '".$extencion."'<br>"; 
			return $_GET[$email];
		}
	}else{
		$GLOBALS['msj'].=$email."=error&";
		return false;
	}
		
}
}


$nombre=validaCamposTexto('nombre');
$apellido=validaCamposTexto('apellido');
$telefono=validaNumeros('telefono');
$correo=validaEmail('correo');
$asunto=validaCamposTexto('asunto');
$textoAsunto=validaArea('textoAsunto');

if ($nombre && $apellido && $telefono && $correo && $asunto && $textarea) {
	header('location:gracias.php?'.$msj);
}else{
	header('location:formulario.php?'.$msj);
}


 ?>
	<!-- Featured -->
		<div id="featured">
			<div class="container">
				<header>
					<h2> Estimad@ Sr@ <?php echo $_GET['nombre']." ".$_GET['apellido'];  ?></h2>
				</header>
				<p>Agradecemos su <strong>Tiempo que se ha Tomado</strong> para enviarnos su Opinion, para nosotros es un placer atender todas y cada una de sus sugerencias, ya que con su aporte cada dia vamos mejorando xD.</p>
				<hr />
				<div class="row">
				<div class="centrarDiv">
					<section class="4u" id="13">
					<span class="pennant"><span class="fa fa-globe"></span></span>
						<h3><?php echo $_GET['textoAsunto']; ?></h3>
						
					</section>
					
						<div class="container">
							<a href="formulario.html#13" class="button button-style1">Back!</a>
							<a href="indexlinear.html" class="button button-style1">Home Page</a>
						</div>
				</div>
				</div>
			</div>
		</div>
		fun

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
				<a href="#" class="fa fa-tumblr">Design: by Solutiones JJ "Soluciones a tu Medida" @copyright Todo los derecechos Recervados xD</a>
			</div>
		</div>

	</body>
</html>