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
	<script>
		var total=0;
		var iva=16;
		var con_iva=0;
		var sin_iva=0;

		function sumar(valor) {
		total += valor; 
		document.form1.total.value=total;
		}

		function restar(valor) {
		total-=valor; 
		document.form1.total.value=total;
		}		 
		
	</script>

</head>

<body>
		
		<!--FRASE ENCABEZADO-->
		<center>
				<img src="logos/portada.png" width="612" height="102" ALT="CECAM"/>
		</center>

	<section Id="contenedor">
		<section id="principal">
				<div id="container">
					<div>
						<?php
							// AUTHOR: webreunidos.es

							// Primero definimos la conexión a la base de datos
							define('HOST_DB', 'localhost');  //Nombre del host, nomalmente localhost
							define('USER_DB', 'u131509698_root');       //Usuario de la bbdd
							define('PASS_DB', 'Cecam123');           //Contraseña de la bbdd
							define('NAME_DB', 'u131509698_cecam'); //Nombre de la bbdd
							include('conexion.php');
							// Definimos la conexión
							function conectar(){
								global $conexion;  //Definición global para poder utilizar en todo el contexto
								
								$conexion = mysqli_connect(HOST_DB, USER_DB, PASS_DB, NAME_DB)
								/*or die ('NO SE HA PODIDO CONECTAR AL MOTOR DE LA BASE DE DATOS');
								mysqli_select_db(HOST_DB,NAME_DB)*/
								or die ('NO SE ENCUENTRA LA BASE DE DATOS ' . NAME_DB);
							}
							function desconectar(){
								global $conexion;
								mysql_close($conexion);
							}

							//Variable que contendrá el resultado de la búsqueda
							$texto = '';
							//Variable que contendrá el número de resgistros encontrados
							$registros = '';

							if($_POST){
								
							  $busqueda = trim($_POST['buscar']);

							  $entero = 0;
							  
							  if (empty($busqueda)){
								  $texto = 'Búsqueda sin resultados';
							  }else{
								  // Si hay información para buscar, abrimos la conexión
								  conectar();
							      //mysqli_set_charset('utf8');  // mostramos la información en utf-8
								  
								  //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar
								  $sql = "SELECT * FROM wv_nombrecompleto WHERE curp = '" .$busqueda. "'";
								  
								  $resultado = mysqli_query($conexion,$sql); //Ejecución de la consulta
							      //Si hay resultados...
							      $var1=mysqli_num_rows($resultado);
								  if ( $var1 > 0){ 
								     // Se recoge el número de resultados
									 //$registros = '<p>HEMOS ENCONTRADO ' . mysql_num_rows($var1) . ' registros </p>';
								     // Se almacenan las cadenas de resultado
									 while($fila = mysqli_fetch_assoc($resultado)){ 
							              $texto .=$fila['Nombre']. ' ' .$fila['Apellido_Paterno'].' ' .$fila['Apellido_Materno']. ' ';
										 }
								  
								  }else{
										   $texto = "NO HAY RESULTADOS EN LA BBDD";	
								  }
								  // Cerramos la conexión (por seguridad, no dejar conexiones abiertas)
								  mysqli_close($conexion);
							  }
							}
						?>
						<br>
						<form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
    						<input id="buscar" name="buscar" type="search" placeholder="Introduzca su CURP aquí..." autofocus >
    						<input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
						</form>
						<br>
							<p> BANCO: <span> <img src="logos/logo-banorte.png" width="25%" height="15%"></span></p>
							
							<p> No.DE CUENTA:</p> <P style="font-size:20px; font-family:Verdana;"><strong>266467841</strong> </P>
							<p>NOMBRE DEL CLIENTE:</p>
							<p><strong>CONSULTORES EN EDUCACIÓN CONTINUA Y ACTUALIZACIÓN MÉDICA SC (CECAM)</strong></p>
						<br>	
						<p> NOMBRE DEL DEPOSITANTE O PAGADOR:</p>
						<p style="font:Arial; font-size:24px;">
						<?php 
						
							echo $texto; 
						?>
						</p>
						<p>Observaciones: Curso(s) a pagar</p>
					</div>
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

							<form name='form1'> 
									<center>
   									<input type="checkbox" name="checkbox" onClick="if (this.checked) sumar(1250); else restar(1250)" value="checkbox"> LEGO 
   									<input type="checkbox" name="checkbox" onClick="if (this.checked) sumar(1500); else restar(1500)" value="checkbox"> BLS 
   									<input type="checkbox" name="checkbox" onClick="if (this.checked) sumar(3500); else restar(3500)" value="checkbox"> ACLS 
   									<input type="checkbox" name="checkbox" onClick="if (this.checked) sumar(3500); else restar(3500)" value="checkbox"> PALS 
   									<input type="checkbox" name="checkbox" onClick="if (this.checked) sumar(4500); else restar(4500)" value="checkbox"> BLS + ACLS 
                                    <input type="checkbox" name="checkbox" onClick="if (this.checked) sumar(4500); else restar(4500)" value="checkbox"> BLS + PALS 
									</center>
									<p align="right" style=" font-size:30px;">TOTAL: $ <input type="button" name="total" value="0" style="font-size:34px;"></P>						
							</form>
					</div>
	  				<!--PUBLICACIONES DE CARTELES-->
	  				<article id="galeria-inicio">
					<!--FOTOGRAFIA-->
					<!--CURSOS-->
					
					<!--CONVOCATORIA-->
					
					<!--IR A LA PAGINA COMENTARIOS Y SUGERENCIAS-->
					

					<!--COMENTARIOS FACEBOOK-->
									
					</article>
					
				</div>

				
		</section>

		<!--FINAL DE LA SECCION -->
		
	</section>
	
		
		
	<footer>
		<section id="contenedor">
				<p align="center">
			    <script> 
			        var mydate=new Date(); 
			        var year=mydate.getYear(); 
			        if (year < 1000) 
			            year+=1900; 
			        var day=mydate.getDay(); 
			        var month=mydate.getMonth()+1; 
			        if (month<10) 
			            month="0"+month; 
			        var daym=mydate.getDate(); 
			        if (daym<10) 
			            daym="0"+daym; 
			        document.write('Fecha: ');
			        document.write("<small><font color='000000' face='Arial'><b>"+daym+"/"+month+"/"+year+"</b></font></small>")
			    </script> 
				</p>
				<p align="center">
				    <script type="text/javascript">
				        var d = new Date();
				        document.write('Hora:');
				        document.write(' ');
				        document.write(d.getHours());
				        document.write(':');
				        document.write(d.getMinutes());
				        document.write(':');
				        document.write(d.getSeconds());
				    </script>
				</p>

					
			<!--IMAGENES DE ORGANIZACIONES MEDICAS PIE DE PAGINA-->
					<img src="logos/logo-cecam.jpg" width="156px" height="40px" />
					<img src="logos/medicasur-logo.jpg" width="86px" height="29px" />
					<img src="logos/aha-tc-logo.jpg" width="142px" height="30px" />
		
	</footer>
</body>	
</html>