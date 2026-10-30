<?php
$produtos = [
    ["nome" => "Teclado mecânico", "preco" => 249.90, "estoque" => 12],
    ["nome" => "Mouse sem fio",    "preco" => 79.50,  "estoque" => 30],
    ["nome" => "Monitor 24''",      "preco" => 899.00, "estoque" => 5],
    ["nome" => "Fone de ouvido",    "preco" => 129.90, "estoque" => 20],
    ["nome" => "Webcam HD",         "preco" => 199.90, "estoque" => 0],
];
 
function formatarPreco(float $preco): string
 {
    return "R$ " . number_format($preco, 2, ",", ".");
}

$total = 0;

foreach ($produtos as $produto) {
    $total += $produto["preco"] * $produto["estoque"];
}

$quantidadeProdutos = count($produtos);
?>

<table border="1" cellpadding="6">
  <thead>
    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Estoque</th>
  </thead>
  <tbody>
  <?php foreach ($produtos as $item): ?>
    <tr>
      <td><?= htmlspecialchars($item["nome"]) ?></td>
      <td>R$ <?= formatarPreco($item["preco"]) ?></td>
      <td><?= $item["estoque"] ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<p>
    <?= $quantidadeProdutos ?> produtos cadastrados.
    Valor total em estoque: <strong><?= formatarPreco($total) ?></strong>
</p>
