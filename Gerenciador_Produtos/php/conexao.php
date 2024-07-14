<?php
// definições de host, database, usario
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "db_estoque";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conexao){
    die("Erro ao conectar ao banco de dados".mysqli_connect_error());
}
?>