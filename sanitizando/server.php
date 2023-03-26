<?php

$name = $_POST['nombre'];
$username = $_POST['username'];
$email = $_POST['email'];
$age = $_POST['edad'];

$html = htmlentities($name);
$strip = strip_tags($name);
$trim = trim($name);
$stripslashes = stripslashes($name);
$addslashes = addslashes($name);
$onlywords = preg_replace('/[^A-Za-z0-9]/', '', $name);
$otro = preg_replace('/\d/', "", $name);
$onlyNumbers = preg_replace('/[^0-9]/', '', $name);
$onlyNumbers = preg_replace('/\D/', '', $name);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);

echo "<pre>";
var_dump($_POST);
echo "</pre>";

?>