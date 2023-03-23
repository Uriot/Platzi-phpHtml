<?php 
    $usuarios = ['Michi', 'Juan', 'Pedro', 'Maria', 'Jose'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ciclos</title>
</head>
<body>
    <?php for($i = 0; $i < 10 ; $i++): ?>
        <li><?= $i ?></li>
    <?php endfor; ?>

    <?php while(false): ?>
        <li>Cualquier cosa</li>
    <?php endwhile; ?>
    
    <h2>Lista de usuarios</h2>

    <?php foreach ($usuarios as $value): ?>
        <li><?=$value?></li>
    <?php endforeach; ?>

</body>
</html>