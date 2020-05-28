<!DOCTYPE html>
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
	<link rel="stylesheet" href="css/tabla.css"/>
	<link rel="stylesheet" href="css/menu.css">
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
				
					<div class="rwd">
						<table class="width200">
							<thead>
								<tr>
									<th>CODIGO</th>
									<th>CURSO</th>
									<th>TIPO</th>
									<th>COSTO</th>
								</tr>
							</thead>
							<tbody>
								<?php  
									include('conexion.php');  

										$query = "select * from $tabla";     // Esta linea hace la consulta 
										$resultado = mysqli_query($cadenaConexion,$query) or die(mysqli_error($cadenaConexion));  
										while($registro = mysqli_fetch_assoc($resultado)){  
												echo "  
												    <tr>  
												      <td width='150'>".$registro['Codigo']."</td>  
												      <td width='150'>".$registro['Curso']."</td>  
												      <td width='150'>".$registro['Tipo']."</td>  
												      <td width='150'>".$registro['Costo']."</td>  
												      <input type='hidden' name='Codigo' value=".$registro['Codigo'].">
													  
												    </tr>  
												";  
												}  
										mysqli_close($cadenaConexion); 
									?> 
							</tbody>
								
							</table>
					</div>
	  				<!--PUBLICACIONES DE CARTELES-->
	  				<article id="galeria-inicio">
					<!--FOTOGRAFIA-->
					<!--CURSOS-->
					<center>
						<!--PARTE DE ABAJO DE LA BASE DE DATOS-->
						<!--<article id="principal">-->
						<h2 align="center">INCLUYE:</h2>
						<br><br>
						<ul style="list-style-type:disc;">
							<li style="color:#ED1C24;"><p align="left">CARTA DE ACEPTACION AL CURSO EN CASO SEA SOLICITADA POR EL ESTUDIANTE</p></li><br>
							<li style="color:#ED1C24;"><p align="left">MANUAL DEL PROVEDOR SOPORTE VITAL BASICO</p></li><br>
							<li style="color:#ED1C24;"><p align="left">MANUAL DEL PROVEDOR SOPORTE CARDIOVASCULAR AVANZADO</p></li><br>
							<li style="color:#ED1C24;"><p align="left">SEGURO DE RESPONSABILIDAD CIVIL (durante el tiempo de curso)</p></li><br>
							<li style="color:#ED1C24;"><p align="left">ALIMENTACION: DESAYUNO Y COMIDA AMBOS DIAS</p></li><br>
							<li style="color:#ED1C24;"><p align="left">CONSTANCIA DE PARTICIPACION</p></li><br>
							<li style="color:#003449;"><p align="left">CERTIFICACIONES OFICIALES EXPEDIDAS POR EL CEI MEDICA SUR</p></li><br>
						</ul>
						<br>
						<br>
						<p style="color:#0088CB;" align="left">Nuestros cursos y nuestra empresa estan registrados y avalados por la AHA, para verificar <a href="#" style="color:#63B105;"> ir a CPRverify</a></p>


					</center>
					<!--CONVOCATORIA-->
					
					<!--IR A LA PAGINA COMENTARIOS Y SUGERENCIAS-->
					
					

					<!--COMENTARIOS FACEBOOK-->
									
					</article>
					
				</div>

				<div id="container">
					
		<!--=============================
		Markup for FADE animation
		=================================-->


					<div class="flexslider">
	    				<ul class="slides">
	    					<li>
	    						<img src="logos/Logo-portada-principal.png" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/2.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/3.png" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/4.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/5.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p>  
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/6.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/7.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/8.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/9.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/10.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/11.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/12.jpg" width="850" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/13.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/14.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/15.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p>  
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/16.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/17.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p>  
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/18.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/19.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p>  
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/20.jpg" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p>  
	    					</li>
	    					<li>
	    						<img src="fotografias/fotosinicio/21.png" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p>  
	    					</li>
	    					<li>
	    						<img src="logos/Logo-portada-principal.png" width="870" height="504"/>
	    						<p class="flex-caption">CECAM <br><br> <i>Sitio de Entrenamiento para profesionales de la salud </i><br> <i>y publico en general </i></p> 
	    					</li>	
	    				</ul>
	  				</div>
		</section>

		<!--FINAL DE LA SECCION -->
		
	</section>
<!--
	<section id="principal" class="ocultar-en-movil">
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
		<div style="position:absolute; top: 3780px; left:880px" class="ocultar-en-movil"><p class="flex">Encuentranos aqui ► </p></div>
		
-->		
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