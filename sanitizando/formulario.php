<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizando</title>
</head>
<body>
    <form action="server.php" method="post">

    <label for="nombre">nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label for="username">username</label>
    <input type="text" name="username" id="username">
    <label for="email">email</label>
    <input type="email" name="email" id="email">
    <label for="edad">edad</label>
    <input type="number" name="edad" id="edad">
    <button >Mandar Formularios</button>
    </form>

</body>
</html>