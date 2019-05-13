<?php
    include_once("conexao.php");

    $comandoSQL = "SELECT nome_perfil FROM perfil p, usuarios u ";
    $comandoSQL = "WHERE p.perfil_id = u.perfil_id";
    $query = mysqli_fetch($conexao, $comandoSQL);


?>