<?php
    $frase = $_GET['frase'];
    $censura = $_GET['censura'];
    $frase_completa = "La frase è $frase e ha " .strlen($frase) ." caratteri";
    $frase_censurata = str_replace($censura, "***", $frase);
    $nuova_frase = "La frase con censura è $frase_censurata e ha " .strlen($frase_censurata) ." caratteri";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h1><?php echo $frase_completa ?></h1>
    <h1><?php echo $nuova_frase ?></h1>
</body>
</html>