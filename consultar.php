<?php
echo "<h2>Consultar Roupas</h2>";
echo "<form method='GET' action='consultar.php'>";
echo "  <label>Digite o Nome da Roupa:</label> ";
echo "  <input type='text' name='nome'> ";
echo "  <input type='submit' value='Buscar'>";
echo "</form><hr>";

if (isset($_GET['nome'])) {
    $busca = $_GET['nome'];
    $conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'lojaroupa');
    
    if ($conexao->connect_error) {
        die('Falha na conexão: ' . $conexao->connect_error);
    }
    $sql = "SELECT * FROM roupas WHERE nome LIKE '%$busca%'";
    $resultado = $conexao->query($sql);

    echo "<h3>Resultados Encontrados:</h3>";
    if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
            echo "Código: " . $linha['codigo'] . "<br>";
            echo "Nome da Roupa: " . $linha['nome'] . "<br>";
            echo "Categoria: " . $linha['categoria'] . "<br>";
            echo "Marca: " . $linha['marca'] . "<br>";
            echo "Tamanho: " . $linha['tamanho'] . "<br>";
            echo "Cor: " . $linha['cor'] . "<br>";
            echo "Material: " . $linha['material'] . "<br>";
            echo "Preço (ex.: 49.90): " . $linha['preco'] . "<br>";
            echo "Quantidade em Estoque: " . $linha['quantidade'] . "<br>";
            echo "Descrição: " . $linha['descricao'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Nenhuma roupa encontrada.";
    }

    $conexao->close();
}
?>
