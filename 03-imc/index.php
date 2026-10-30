<?php
$peso   = 70.0;   // em kg
$altura = 1.75;   // em metros 

$erro = "";

if ($altura <= 0 || $peso <= 0) {
    $erro = "Informe peso e altura devem ser maiores que zero.";
} else {
    $imc = $peso / ($altura * $altura);

    $imcFormatado = number_format($imc, 1, ",", ".");

    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso";
    } elseif ($imc < 25) {
        $classificacao = "Peso normal";
    } elseif ($imc < 30) {
        $classificacao = "Sobrepeso";
    } elseif ($imc < 35) {
        $classificacao = "Obesidade grau I";
    } elseif ($imc < 40) {
        $classificacao = "Obesidade grau II";
    } else {
        $classificacao = "Obesidade grau III";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Calculadora de IMC</title>
</head>
<body>
  <h1>Calculadora de IMC</h1>
  <p>Peso: <?= $peso ?> kg</p>
  <p>Altura: <?= $altura ?> m</p>
  <p>IMC: <strong><?= $imcFormatado ?></strong></p>
  <p>Classificação: <strong><?= $classificacao ?></strong></p>

  <?php endif; ?>
</body>
</html>

 
