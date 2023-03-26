<?php

// if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
//     $nombre = $_POST["nombre"];
//     echo "El nombre es: $nombre";
// } else {
//     echo "No se recibió el nombre";
// }

if(isset($_POST["form"])){
    echo "El formulario fue enviado";
} else {
    echo "El formulario no fue enviado";
}

?>