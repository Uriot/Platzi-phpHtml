<?php 


$nombre = $isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';
$edad   = $isset($_GET['edad']) ? $_GET['edad'] : 'No especificada';

echo "Hola $nombre, tienes $edad años";

?>