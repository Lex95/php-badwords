<?php

$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit temporibus placeat hic? Esse, labore! Libero totam fugiat iusto esse dolores reprehenderit cupiditate perferendis vitae ipsa, ipsam rerum tempore iste nulla.";

$badword = $_GET["badword"];

$stringLength = strlen($string);

$result = str_replace($badword, "***", $string);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Paragrafo</h1>
    <p><?php echo $string ?></p>
    <p><strong>Lunghezza</strong> <?php echo $stringLength ?></p>
    <h3>Paragrafo corretto</h3>
    <p><?php echo $result ?></p>
</body>
</html>