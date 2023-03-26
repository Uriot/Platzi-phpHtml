<?php

require("mail.php");

function validate($name, $email, $subject, $message, $form)
{
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

if (isset($_POST['form'])) {
    $status = '';

    if (validate(...$_POST)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $body = "$name <$email> ha enviado un mensaje: <br><br> $message";

        //mandar correo

        sendMail($subject, $body, $email, $name, true);

        $status = 'success';


    } else {
        $status = 'danger';
    }
} else {
    // $status = '';
    // var_dump('no se ha enviado el formulario') ;
    // die();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>

    <?php if($status == 'success'): ?>
    <div class="alert success">
        <span>¡Mensaje enviado!</span>
    </div>
    <?php endif; ?>

    <?php if($status == 'danger'): ?>
    <div class="alert danger">
        <span>¡Error al enviar el mensaje!</span>
    </div>
    <?php endif; ?>

    <form action="./" method="post">
        <h1>¡Contactanos!</h1>
        <div class="input-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" placeholder="Escribe tu nombre">
        </div>
        <div class="input-group">
            <label for="email">Correo</label>
            <input type="email" name="email" id="email" placeholder="Escribe tu correo">
        </div>
        <div class="input-group">
            <label for="subject">Asunto</label>
            <input type="text" name="subject" id="subject" placeholder="Escribe el asunto">
        </div>
        <div class="input-group">
            <label for="message">Mensaje</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Escribe tu mensaje"></textarea>
        </div>
        <div class="button-container">
            <button name="form" type="submit">Enviar</button>
        </div>
        <div class="contact-info">
            <div class="info">
                <span><i class="fas fa-map-marker-alt"></i> 13 Saw Mill Circle, North Olmested.</span>
            </div>
            <div class="info">
                <span><i class="fas fa-phone"></i> +1 123 456 7890</span>
            </div>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/79f37189bb.js" crossorigin="anonymous"></script>
</body>

</html>
