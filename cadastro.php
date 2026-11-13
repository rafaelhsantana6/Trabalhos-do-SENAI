<?php
$nome= $_POST['nome'];
$matricula= $_POST['matricula'];
$funcao= $_POST['funcao'];
$departamento= $_POST['departamento'];
$idade= $_POST ['idade'];
$cpf= $_POST['cpf'];
$rg= $_POST['rg'];
$salario= $_POST['salario'];
$endereco= $_POST['endereco'];
$uf= $_POST['uf'];
$pais= $_POST['pais'];
//define conexão
$servidor='localhost';
$usuario='root';
$senha='Home@spSENAI2025!';
$banco='cadastro';
//realiza conexão
$conexao= new mysqli($servidor, $usuario, $senha, $banco);
//verifica conexão com exito ou não
if ($conexao->connect_error) {
    die('Falha na conexao:'. $conexao->connect_error);
}
$sql= "INSERT INTO funcionarios (nome,matricula,funcao,departamento,idade,cpf,rg,salario,endereco,uf,pais)VALUES
('$nome','$matricula','$funcao','$departamento','$idade','$cpf','$rg','$salario','$endereco','$uf','$pais')";
if ($conexao->query($sql) === TRUE) {
    echo "<h2>Cliente cadastrado com sucesso!</h2>";
    echo "<p>Dados registrados:</p>";
    echo "nome: ". $nome . "<br>";
    echo "matricula: ". $matricula . "<br>";
    echo "funcao: ". $funcao . "<br>";
    echo "departamento: ". $departamento . "<br>";
    echo "idade: ". $idade . "<br>";
    echo "cpf: ". $cpf . "<br>";
    echo "rg: ". $rg . "<br>";
    echo "salario: ". $salario . "<br>";
    echo "endereco: ". $endereco . "<br>";
    echo "uf: ". $uf . "<br>";
    echo "pais: ". $pais . "<br>";
} else {
    echo "Erro ao cadastrar: " .$conexao->error;
}
$conexao->close();
?>
