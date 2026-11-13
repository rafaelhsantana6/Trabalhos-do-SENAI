<?php
$conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'lojaroupa');

if ($conexao->connect_error) {
    die('Falha na conexão: ' . $conexao->connect_error);
}

$codigo_original = $_POST['codigo_original'];
$novo_codigo = $_POST['codigo'];
$novo_nome = $_POST['nome'];
$novo_categoria = $_POST['categoria'];
$novo_marca = $_POST['marca'];
$novo_tamanho = $_POST['tamanho'];
$novo_cor = $_POST['cor'];
$novo_material = $_POST['material'];
$novo_preco = $_POST['preco'];
$novo_quantidade = $_POST['quantidade'];
$novo_descricao = $_POST['descricao'];

$sql_update = "UPDATE roupas 
SET codigo = '$novo_codigo', nome = '$novo_nome', categoria = '$novo_categoria', marca = '$novo_marca', tamanho = '$novo_tamanho',
 cor = '$novo_cor', material = '$novo_material', preco = $novo_preco, quantidade = $novo_quantidade, descricao = '$novo_descricao'
 WHERE codigo = '$codigo_original'";

if ($conexao->query($sql_update) === TRUE) {
    echo "<h2>Dados Atualizados com Sucesso!</h2>";
    echo "<p>Cadastro Final no Banco:</p>";
    echo "Código: " . $novo_codigo . "<br>";
    echo "Nome da Roupa: " . $novo_nome . "<br>";
    echo "Categoria: " . $novo_categoria . "<br>";
    echo "Marca: " . $novo_marca . "<br>";
    echo "Tamanho: " . $novo_tamanho . "<br>";
    echo "Cor: " . $novo_cor . "<br>";
    echo "Material: " . $novo_material . "<br>";
    echo "Preço (ex.: 49.90): " . $novo_preco . "<br>";
    echo "Quantidade em Estoque: " . $novo_quantidade . "<br>";
    echo "Descrição: " . $novo_descricao . "<br>";
} else {
    echo "Erro ao atualizar: " . $conexao->error;
}

$conexao->close();
?>
