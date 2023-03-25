<?php 

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
// die();

$baseName = $_Files['imagen']['name'];
$tmpPath  = $_Files['imagen']['tmp_name'];

if(dir("./images") === false){
    mkdir("./images");
}
$newPath  = "./images/$baseName";

move_uploaded_file($tmpPath, $newPath);

echo "<img src='$newPath' alt=''>";

?>