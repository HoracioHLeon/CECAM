<!DOCTYPE html>



<?php
include_once 'conexion.php';
if(isset($_POST['btn-guardar']))
{
 // variables for input data
 //$no_aspirante = $_POST['No_Aspirante '];
 $curp = $_POST['CURP'];
 $nombre = $_POST['Nombre'];
 $apellido_paterno = $_POST['Apellido_Paterno'];
 $apellido_materno = $_POST['Apellido_Materno'];
 $edad = $_POST['Edad'];
 $sexo = $_POST['Sexo'];
 $direccion = $_POST['Direccion'];
 $profesion = $_POST['Profesion'];
 $tel_celular = $_POST['Tel_Celular'];
 $tel_casa = $_POST['Tel_casa'];
 $otro = $_POST['Otro'];
 $email = $_POST['Email'];
 $especialidad = $_POST['Especialidad'];
 $ced_profesional = $_POST['Ced_Profesional'];
 $lugar_trabajo = $_POST['Lugar_Trabajo'];
 $tel_fijo = $_POST['Tel_Fijo'];
 // variables for input data
 
 // sql query for inserting data into database
 	$mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
        $sql_query = "INSERT INTO `aspirante` (`CURP`,`Nombre`, `Apellido_Paterno`, `Apellido_Materno`, `Edad`, `Sexo`, `Direccion`, `Profesion`, `Tel_Celular`, `Tel_casa`, `Otro`, `Email`, `Especialidad`, `Ced_Profesional`, `Lugar_Trabajo`, `Tel_Fijo`) VALUES ('$curp', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', '$sexo', '$direccion', '$profesion', '$tel_celular', '$tel_casa', '$otro', '$email', '$especialidad', '$ced_profesional', '$lugar_trabajo', '$tel_fijo');";

 
 //mostrar id


									
       // $resultado=$mysqli->query($sql_query);
        // sql query for inserting data into database
       
  if($resultado=$mysqli->query($sql_query))
 { 
  ?>
  <script type="text/javascript">
  alert('Datos insertados');
  window.location.href='inscripcion.php';
  </script>
  <?php
 }
}
?>



<html lang="es">
<head>
	<title>CECAM</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Descripcion"/>
	<!--<meta name="viewport" content="width=device-width, initial-scale=1"/>-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" type="img/x-icon" media="all" href="Iconos/icono2.ico"/>
	<link rel="stylesheet" type="text/css" media="all" href="css/estilos.css"/>
	<!--<link rel="stylesheet" type="text/css" href="css/reset.css"/>->>
	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>-->
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen"/>
	<!--<link rel="stylesheet" type="text/css" href="demo-stuff/demo.css" media="screen"/>-->	
	<!--<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400">-->
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/button.css">
	
	<script type="text/javascript" src="js/menuresponsive.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<!--<script src="js/menuscript.js"></script>-->
	<script src="js/menu.js"></script>
	<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
	

	<!-- Hook up the FlexSlider -->
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider();
		});
	</script>

</head>

<body>
	<header>
		<embed src="audios/sonido2.mp3" hidden="true" loop="false"> 
		<!--FRASE ENCABEZADO-->
		<div id="frase-container" class="ocultar-en-movil">
				<p style="font-family:Arial; font-size:20px; color:#003449; position:absolute; top:50px; left:140px;"> <i>Cuando el cuerpo duerme, vela el espíritu.</i></p>
				<p style="font-family:Arial; font-size:15px; color:#000000; position:absolute; top:80px; left:440px;"><i>Hipocrates</i></p>
				<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Cuando%20el%20cuerpo%20duerme,%20vela%20el%20espíritu" data-size="Default"> Tweet </a>
				<div class="fb-share-button" data-href="https://www.facebook.com/cecamchiapas/" data-layout="button_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fcecamchiapas%2F&amp;src=sdkpreparse">Compartir</a></div>
			</div>
		<!--ENCABEZADO LOGO SIN RESPONSIVE-->
		<h1 class="ocultar-en-movil">
			<img src="logos/logo.gif" width="412" height="147" ALT="CECAM" />
		</h1>
		<!--ENCABEZADO DEL MENU LOGO-->
		<!--MENU RESPONSIVE-->
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="iconomenu"><img height="80" width="80" src="iconos/icono-inicio-corazon.png"><img src="logos/logo.gif" width="132" height="77" ALT="CECAM" /></span>Menú</a>
			<embed src="horse.mp3" hidden="true" loop="true"> 
		
		<!--MENU NORMAL-->
		<!--ENCABEZADO DEL MENU LOGO-->
		</div>

 		<img src="imagenes/ambulancia.gif" width="83" height="62" style="position:absolute; top:180px; left:180px;" class="ocultar-en-movil">
 		<img src="imagenes/estetoscopio.jpg" width="111" height="53" style="position:absolute; top:190px; left:350px;" class="ocultar-en-movil">
 		
		<nav class="navegador">
			<ul><strong>
				<li><a href="index.html" id="active" class="colorletramenu"><span><img height="32" width="32" src="iconos/icono-inicio.png">INICIO</span></a></li>
				<li class="submenu">
					<a href="#" class="colorletramenu" id="coloractivo"><span><img height="32" width="32" src="iconos/icono-corazon.png">NUESTRO CECAM</span><span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="nuestrocecam.html">NUESTRO CECAM <span class="icon-dot"></span></a></li>
						<li><a href="cprverify.html">CPRverify <span class="icon-dot"></span></a></li>
						<li><a href="sitiosdeinteres.html">SITIOS DE INTERES <span class="icon-dot"></span></a></li>
						<li><a href="calendario.html">CALENDARIO <span class="icon-dot"></span></a></li>
						<li><a href="inscripcion.php">INSCRIPCION <span class="icon-dot"></span></a></li>
						<li><a href="directorio.html">DIRECTORIO <span class="icon-dot"></span></a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#" class="colorletramenu" id="coloractivo"><span><img height="32" width="32" src="iconos/icono-estudiante.png">OFERTA EDUCATIVA</span></a>
					<ul class="children">
						<li><a href="ofertaeducativa.php">OFERTA EDUCATIVA<span></span></a></li>
						<li><a href="cursos.html">CURSOS <span class="icon-dot"></span></a></li>
						<li><a href="nuestroscursos.html">NUESTROS CURSOS <span class="icon-dot"></span></a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#" class="colorletramenu" id="coloractivo"><span><img height="32" width="32" src="iconos/icono-ubicacion.png">CONTACTANOS</span><span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="contactanos.html">CONTACTANOS <span class="icon-home"></span></a></li>
						<li><a href="preguntasfrecuentes.html" >PREGUNTAS FRECUENTES <span class="icon-dot"></span></a></li>
						<li><a href="comentariosysugerencias.html" >COMENTARIOS Y SUGERENCIAS <span class="icon-dot"></span></a></li>
					</ul>
				</li>
			</ul></strong>
		</nav>
	</header>
	<section Id="contenedor">
		<section id="principal">
				<div id="container">
					
		<!--=============================
		Markup for FADE animation
		=================================-->
					<center>
					<br>
					<br>
						<div class="inner">
					<header class="align-center">
						<h1>INSCRIPCION</h1>
							<form method="post">
                            <table align="center">                           
                            <tr>
                            	<!--<td><input type="text" name="No_Aspirante" placeholder="Id" required /></td>-->
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">CURP:</b> <input type="text" name="CURP" placeholder="CURP" required /></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Nombre:</b> <input type="text" name="Nombre" placeholder="Nombre" required /></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Apellido paterno:</b> <input type="text" name="Apellido_Paterno" placeholder="Apellido paterno" required /></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Apellido materno:</b> <input type="text" name="Apellido_Materno" placeholder="Apellido materno" required /></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Edad:</b> <input type="text" name="Edad" placeholder="Edad" required /></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Sexo:</b> <input type="text" name="Sexo" placeholder="Sexo" required /></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Direccion:</b> <input type="text" name="Direccion" placeholder="Direccion" required /></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Profesion:</b> <input type="text" name="Profesion" placeholder="Profesion" required /></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Telefono celular:</b> <input type="text" name="Tel_Celular" placeholder="Telefono celular" required /></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Telefono de casa:</b> <input type="text" name="Tel_casa" placeholder="Telefono de casa" /></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Otro:</b> <input type="text" name="Otro" placeholder="Otro" required /></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Email:</b> <input type="text" name="Email" placeholder="Email" required /></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Especialidad:</b> <input type="text" name="Especialidad" placeholder="Especialidad" required /></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Cedula profesional:</b> <input type="text" name="Ced_Profesional" placeholder="Cedula profesional"/></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Lugar de trabajo:</b> <input type="text" name="Lugar_Trabajo" placeholder="Lugar de trabajo"/></td>
                            </tr>
                            <tr>
                            	<td><b style="font:Arial; font-size:20px; color:#0088CB;">Telefono fijo:</b> <input type="text" name="Tel_Fijo" placeholder="Telefono fijo"/></td>
                            </tr>
                            <tr>
                            	<td><button type="submit" name="btn-guardar"><strong>Guardar</strong></button></td>
                            </tr>
                            </table>
                            </form>
					</header>
									
				</div>
				</center>
	  				<br>
	  				<br>
	  				<p align="left"><a href="ficha-de-pago.php" style="color:#63B105; font-size:20px;"><b>Ir a ficha de pago</b></a> <span><img height="32" width="32" src="iconos/ficha.png"></span></p>

	  				<!--PUBLICACIONES DE CARTELES-->
	  				<div class="rwd">
						<table class="width200">
							<thead>
								<tr>
									<!--<th>CODIGO</th>-->
									
								</tr>
							</thead>
							<tbody>
							<!--
								<?php  
									//include('conexion.php');  

									/*	$query = "select max(No_Aspirante) as No_Aspirante from wv_nombrecompleto";     // Esta linea hace la consulta 
										$resultado = mysqli_query($cadenaConexion,$query) or die(mysqli_error($cadenaConexion));  
										while($registro = mysqli_fetch_assoc($resultado)){  
												echo "  
												    <tr>  
												      <td width='150'>".$registro['No_Aspirante']."</td>  
												        
												      <input type='hidden' name='No_Aspirante' value=".$registro['No_Aspirante'].">

												    </tr>
												";  
												}  
										mysqli_close($cadenaConexion);  */
								?> 
								-->
								
							</tbody>
    							
							</table>
					
				</div>
		</section>
		<!-- LADO DERECHO GATGETS/WITGETS-->
		
		<!--FINAL DE LA SECCION -->
		
	</section>
	<!--<section id="principal" class="ocultar-en-movil">
		<style type="text/css">
			#final{
					padding: 10px;
    				width: 848px;
	    			height: 147px auto;
	    			border-radius: 0px;
				    font-size: 22px;
				    font-family: Arial;
				    position: absolute;
				    /*top:3030px;
				    left:50px;*/
				    background-image: linear-gradient(#FFCB05,#FFCB05);
			}
		</style>
		<div id="container" >
			<div id="final">

			<span><img src="imagenes/heart-handshake.png" width="95px" height="95px" style="position:absolute; top:30px; left:30px;" />			
			<h2 style="font-size:36px; font-family:Verdana; align:center; color:black; padding-left:180px;">¿Aun no esta inscrito?</h2></span>
			<hr style="color:black; border-color:black; width:65%; ">
			<p style="padding-left:180px;">Contactanos ahora mismo al 044 961 156 9644</p>
			<p style="padding-left:180px;">o inscribete aqui mismo</p>
		</div>
		</div>
		<br>
		<br>
	</section>
	<style type="text/css">
		.flex { /*imagen*/
				  	width: 50% auto;
				  	height: 60px;
				  	bottom: 0;
				  	background: rgba(0, 136, 201, 0.4);
				  	color: #fff;
				  	text-shadow: 0 -1px 0 rgba(0,0,0,.3);
				  	font-size: 28px;
				  	font-family: Arial;
				  	line-height: 50px;
				}

	</style>
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30563.456519509782!2d-93.10552446486815!3d16.75516615433533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1479070872210" width="465" height="147" frameborder="0" style="border:0" allowfullscreen style="position:absolute; top:10px; left:380px;" class="ocultar-en-movil"></iframe>
		<div style="position:absolute; top: 3780px; left:880px" class="ocultar-en-movil"><p class="flex">Encuentranos aqui ► </p></div>-->
		
		
	<footer>
		<section id="contenedor">
			<aside>
				<p>Tuxtla Gutierrez, Chiapas</p>
			</aside>
			<section id="principal">
					
			<aside> <!--ICONOS DE REDES SOCIALES PIE DE PAGINA-->
				<aside>
					<a href="https://www.facebook.com/cecamchiapas/"><img src="iconos/facebook.png"/></a>
				</aside>
				<aside>
					<img src="iconos/google-plus.png"/>
				</aside>
				<aside>
					<a href="#"><img src="iconos/twitter.png"/></a>
				</aside>
			</aside>
			<!--IMAGENES DE ORGANIZACIONES MEDICAS PIE DE PAGINA-->
					<img src="logos/logo-cecam.jpg" width="196px" height="70px" />
					<img src="logos/medicasur-logo.jpg" width="106px" height="49px" />
					<img src="logos/aha-tc-logo.jpg" width="182px" height="40px" />
				
			</section>
			<hr style="color:black; border-color:black; width:100%; ">
			<br><br><br>
			<p style="font-family:arial; font-size:10px; color:#003449; padding-left:50px" align="left">Consultores en Educacion Continua y Actualizacion Medica © 2016 </p>
			<br><br><br>
		</section>
		
	</footer>
</body>	
</html>