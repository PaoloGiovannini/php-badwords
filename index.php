<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <form action="censura.php" method="GET">
        <label for="frase">Frase</label>
        <input type="text" name="frase" id="frase" placeholder="Inserisci una frase">
        <label for="censura">Parola da censurare</label>
        <input type="text" name="censura" id="censura" placeholder="Inserisci parola censurata">
        <button>Invia</button>
    </form>
</body>
</html>