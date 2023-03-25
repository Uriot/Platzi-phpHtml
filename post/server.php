<?php 


$nombre = $isset($_POST['nombre']) ? $_POST['nombre'] : 'Anonimo';
$edad   = $isset($_POST['edad']) ? $_POST['edad'] : 'No especificada';

echo "Hola $nombre, tienes $edad años";

?>