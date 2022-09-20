<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
    <div>
        <h1>Resultado da soma</h1>
        <?php
        $numero1 = $_POST ["valor1"];
        $numero2 = $_POST ["valor2"];

        $soma = $numero1 + $numero2;

        if ($soma > 10)
          echo "o resultado é ". ($soma+8);
        
        if ($soma <= 10)
           echo "o resultado é ". ($soma - 5);
        ?>
    </div>
</body>
</html>