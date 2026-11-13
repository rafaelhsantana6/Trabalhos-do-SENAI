<?php
$conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'lojaroupa');

if ($conexao->connect_error) {
    die('Falha na conexão: ' . $conexao->connect_error);
}

$codigo = $_POST['codigo'];

$sql = "SELECT * FROM roupas WHERE codigo = '$codigo'";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    $roupa = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Alterar Roupa</title>
</head>
<body>
<h2>Alterar Roupa</h2>
<form action="salvar_alteracao.php" method="POST">
  <input type="hidden" name="codigo_original" value="<?php echo $roupa['codigo']; ?>">
  <label for="codigo">Código:</label>
  <input type="text" id="codigo" name="codigo" value="<?php echo $roupa['codigo']; ?>" required>

  <label for="nome">Nome da Roupa:</label>
  <input type="text" id="nome" name="nome" value="<?php echo $roupa['nome']; ?>" required>

  <label for="categoria">Categoria:</label>
  <input type="text" id="categoria" name="categoria" value="<?php echo $roupa['categoria']; ?>" required>

  <label for="marca">Marca:</label>
  <input type="text" id="marca" name="marca" value="<?php echo $roupa['marca']; ?>" required>

  <label for="tamanho">Tamanho:</label>
  <input type="text" id="tamanho" name="tamanho" value="<?php echo $roupa['tamanho']; ?>" required>

  <label for="cor">Cor:</label>
  <input type="text" id="cor" name="cor" value="<?php echo $roupa['cor']; ?>" required>

  <label for="material">Material:</label>
  <input type="text" id="material" name="material" value="<?php echo $roupa['material']; ?>" required>

  <label for="preco">Preço (ex.: 49.90):</label>
  <input type="text" id="preco" name="preco" value="<?php echo $roupa['preco']; ?>" required>

  <label for="quantidade">Quantidade em Estoque:</label>
  <input type="number" id="quantidade" name="quantidade" value="<?php echo $roupa['quantidade']; ?>" required>

  <label for="descricao">Descrição:</label>
  <input type="text" id="descricao" name="descricao" value="<?php echo $roupa['descricao']; ?>" required>

  <button type="submit">Gravar Alterações</button>
</form>
</body>
</html>
<?php
} else {
    echo "Roupa não localizada.";
}
$conexao->close();
?>
