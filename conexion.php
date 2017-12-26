<?php
//////////////////CONEXION A LA BASE DE DATOS ///////////////

$host="localhost";
$usuario="root";
$contraseña="";
$base="graficasdinamicas";

$conexion=new mysqli($host,$usuario,$contraseña,$base);
if($conexion->connect_errno)
{
	die("Fallo la conexion:(".$conexion->mysqli_connect_errno().")".$conexion->mysqli_connect_error());
}