<?php
date_default_timezone_set("America/Sao_Paulo");
 
$data = date("d/m/Y");
$hora = date("H:i:s");

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Data e hora</title>
</head>
<body>
  <h1>Data e hora do servidor</h1>
  <p><?= $mensagem ?></p>
</body>
</html>
