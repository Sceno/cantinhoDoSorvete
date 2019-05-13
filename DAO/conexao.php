<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "bd_sorvete";
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(!$conexao){
        echo "Falha ao conectar ao banco de dados!";    
    }
?>