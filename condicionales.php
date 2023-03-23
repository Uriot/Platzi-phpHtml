<?php 
    $seHabloDeBruno = false;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicionales</title>
</head>
<body>
    <!-- Esto no se debe hacer -->
    <h2>Esto no se debe hacer</h2>
    <?php
        if($seHabloDeBruno){
            echo "<p> esta condicional es verdadera </p>";
        }else{
            echo "<p> esta condicional es falsa </p>";
        }
    ?>

    <!-- esto es aceptable -->
    <h2>Esto es aceptable</h2>
    <?php if($seHabloDeBruno) {?>
        <p> esta condicional es verdadera </p>
    <?php } else { ?>
        <p> esta condicional es falsa </p>
    <?php } ?>

    <h2>Esto es lo correcto</h2>
    <!-- esto es correcto -->
    <?php if($seHabloDeBruno): ?>
        <?= "<p> esta condicional es verdadera </p>" ?>
    <?php else: ?>
        <?= "<p> esta condicional es falsa </p>" ?>
    <?php endif; ?>
</body>
</html>