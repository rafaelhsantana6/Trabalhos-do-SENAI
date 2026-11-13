<?php
$codigo = $_POST['codigo'];

$conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'lojaroupa');

if ($conexao->connect_error) {
    die('Falha na conexão: ' . $conexao->connect_error);
}

$sql = "SELECT * FROM roupas WHERE codigo = '$codigo'";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    $sql_excluir = "DELETE FROM roupas WHERE codigo = '$codigo'";

    if ($conexao->query($sql_excluir) === TRUE) {
        echo "<h2>Roupa excluída com sucesso!</h2>";
        echo "Código excluído: " . $codigo;
    } else {
        echo "Erro ao excluir: " . $conexao->error;
    }
} else {
    echo "Roupa não localizada.";
}

$conexao->close();
?>
