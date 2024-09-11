<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Triângulo</title>
    <link rel="stylesheet" href="area.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Área do Triângulo</h1>
        <form action="../aula2/php/process.php" method="post">
            <label for="base">Base do triângulo:</label>
            <input type="number" id="base" name="base" required>

            <label for="altura">Altura do triângulo:</label>
            <input type="number" id="altura" name="altura" required>

            <button type="submit">Calcular</button>
        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    $area = ($base * $altura) / 2;
    $limite = 100;

    if ($area > $limite) {
        $mensagem = "A área do triângulo é maior que 100.";
    } else {
        $mensagem = "A área do triângulo é menor ou igual a 100.";
    }

    echo "<div id='resposta'>
            <h1>$mensagem</h1>
            <p>Área calculada: $area</p>
            <a href='index.html'>Calcular novamente</a>
          </div>";
} else {
    header('Location: index.html');
    exit();
}
?>