<?php
    include("php/conexao.php")

    $deletar = $_POST['deletar'];

    $sql = "DELETE FROM produto WHERE codigo='$deletar'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo"<h1>Produto excluido com sucesso</h1>";
    }else{
        echo"<h1>Produto não foi excluido</h1>".mysqli_error($conexao);
    }
    mysqli_close($conexao)
?>
