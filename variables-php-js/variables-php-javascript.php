<?php 
    
    $usuarios = [
        ['nombre' => 'Michi', 'edad' => 30, 'id' => 1],
        ['nombre' => 'Juan',  'edad' => 20, 'id' => 2],
        ['nombre' => 'Pedro', 'edad' => 25, 'id' => 3],
        ['nombre' => 'Maria', 'edad' => 28, 'id' => 4],
        ['nombre' => 'Jose',  'edad' => 35, 'id' => 5],
    ];

    $edadPetito = 12;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables a Javascript</title>
</head>
<body>
    <script>
        // const usuarios = <?= json_encode($usuarios) ?>;
        // console.log(usuarios);
        let users = JSON.parse('<?= json_encode($usuarios) ?>')
        let edadPepito = <?= $edadPetito ?>;
    </script>
    
    <script src="./index.js"></script>

</body>
</html>