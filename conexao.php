<?php

$endereco = "localhost"; // ou colocar "localhost" - bando de dados phpmyadmin
$nome= "sistema";
$usuario = "root"; // no banco de dados do phpmyadmin
$senha = "";

$conexao = mysqli_connect($endereco,$usuario,$senha,$nome);// isso faz conexão automática ao banco mysql
// adicionar o restante das variáveis do banco.

// se houver erro
// o "!" foi utilizado para representar "caso contrário"
if (!$conexao){
    echo "Erro na conexão".mysqli-connect_error();
}else{
    echo "Parabéns, conectou!";
}
?>