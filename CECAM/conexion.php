<?php

//LEON DE PAZ HORACIO HUMBERTO

//Parametros a configurar para la conexion de la base de datos
$hostdb="localhost"; //servidor
$basededatos="cecam"; //valor de muestra
$usuariodb="root"; //usuario de la BD
$clavedb="123456"; //clave de usuario
$tabla="curso"; //nombre de la tabla
//Fin de los parametros a configurar para la conexion de la base de datos
$cadenaConexion = mysqli_connect("$hostdb","$usuariodb","$clavedb","$basededatos");
//verifica coexion
if (mysqli_connect_errno()) 
{
	echo"Fallo de conexion a MySQL: ".mysqli_connect_error();
}
?>