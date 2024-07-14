<?php
   include("php/conexao.php");

   $nome=$_POST['nome'];
   $lote=$_POST['lote'];
   $fabricante=$_POST['fabricante'];
   $validade=$_POST['validade'];
   $descricao=$_POST['descricao'];

   $sql="INSERT INTO produto(nome, lote, fabricante, validade, descricao)
            VALUES ('$nome', '$lote', '$fabricante', '$validade', '$descricao')";

            if(mysqli_query($conexao, $sql)){
               echo "Usuario cadastro com sucesso";
            }else{
               echo "Erro".mysqli_connect_error($conexao);
            }
            mysqli_close($conexao)