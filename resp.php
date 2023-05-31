<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo do número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado final</h1>
    <main>
    <?php 
        $num = $_GET["number"];
        echo "<p>O número escolhido foi <strong>$num</strong>";
        echo "<br><p>O seu antecessor é <strong>" . ($num -1) ."</strong>";
        echo "<br><p>E o seu sucessor é <strong>" . ($num +1) ."</strong></p>";
    ?>
    <button onclick="javascript:history.go(-1)">&#x2B05Voltar</button>
    </main>
</body>
</html>