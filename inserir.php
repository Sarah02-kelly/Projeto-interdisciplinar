<?php
include './conexao.php';

 $nome = $_REQUEST['nome'];// O"REQUEST" pega os "nomes" que foram colocados no input do index.
 $cpf = $_REQUEST['cpf'];
 $senha = $_REQUEST['senha'];

 $sql = "INSERT INTO usuario(nome,cpf,senha) VALUES('$nome,$cpf,$senha')"; // INSERT INTO - comando de inserção do banco de dados.
 $resultado = mysqli_query($conexao,$sql); // comando usado para executar o mysql.
if($resultado){
    echo "<h2 class='text-center'> Inserido com sucesso! </h2>";
}else{
    echo "<h2 class='text-center'>Erro ao inserir:".mysqli_error($conexao)."</h2>";
}
echo "<br><br><a class='btn btn-secondary' href='./index.php'>Voltar</a>"; // Aparece um botão para voltar a tela inicial.
?>