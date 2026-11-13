<?php
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];
$tamanho = $_POST['tamanho'];
$cor = $_POST['cor'];
$material = $_POST['material'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$descricao = $_POST['descricao'];

$conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'lojaroupa');

if ($conexao->connect_error) {
    die('Falha na conexão: ' . $conexao->connect_error);
}

$sql = "INSERT INTO roupas (codigo, nome, categoria, marca, tamanho, cor, material, preco, quantidade, descricao)
 VALUES ('$codigo', '$nome', '$categoria', '$marca', '$tamanho', '$cor', '$material', $preco, $quantidade, '$descricao')";

if ($conexao->query($sql) === TRUE) {
    echo "<h2>Roupa cadastrada com sucesso!</h2>";
    echo "<p>Dados registrados:</p>";
    echo "Código: " . $codigo . "<br>";
    echo "Nome da Roupa: " . $nome . "<br>";
    echo "Categoria: " . $categoria . "<br>";
    echo "Marca: " . $marca . "<br>";
    echo "Tamanho: " . $tamanho . "<br>";
    echo "Cor: " . $cor . "<br>";
    echo "Material: " . $material . "<br>";
    echo "Preço (ex.: 49.90): " . $preco . "<br>";
    echo "Quantidade em Estoque: " . $quantidade . "<br>";
    echo "Descrição: " . $descricao . "<br>";
} else {
    echo "Erro ao cadastrar: " . $conexao->error;
}

$conexao->close();
?>
