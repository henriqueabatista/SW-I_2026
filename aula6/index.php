<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Média</title>
</head>
<body>
    <h1>Resultado Média</h1>
    <main>
        <?php
        $_nome = $_POST["nome"];
        $_sobrenome = $_POST["sobrenome"];
        $_nota1 = $_POST["m1"];
        $_nota2 = $_POST["m2"];
        $_nota3 = $_POST["m3"];
        $_media = (($_nota1+$_nota2+$_nota3)/3);
        echo "<p> Olá $_nome $_sobrenome, sua média é: $_media </p>";
        ?>
    </main>
</body>
</html>