<?php
$servername="localhost";//ip o dominio
$username="id18118625_root1";
$password="Laclaveestaentu<3";
$dbname="id18118625_carrito";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
die("Error al conectar:".$conn->connect_error );
}

//echo ("conexion exitosa<br>");