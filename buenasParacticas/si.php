<?php 
    $tabla = [];
    for($i = 1; $i <= 10; $i++){
        // $resultado = [
        //     'index' => $i,
        //     'value' => 9 * $i
        // ];
        $resultado = 9 * $i;
        $texto = "9 * $i = $resultado";
        array_push($tabla, $texto);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refactorizacion</title>
</head>
<body>
       
    <h1>Tabla del 9</h1>

    <ul>
        <?php foreach ($tabla as  $value): ?>
            <li><?= $value ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>