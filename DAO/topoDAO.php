<?php
    include_once("conexao.php");

    $usuario_id = $_SESSION["usuario_id"];
			
    //------------Pega usuario no banco-----------------------------------------

    $comandoSQL = "SELECT * FROM usuarios ";
    $comandoSQL .= "WHERE usuario_id = {$usuario_id}";
    $query = mysqli_query($conexao, $comandoSQL);

    if(!$query){
        echo "Falha na consulta ao banco de dados!";
    }else{
        $tb_usuario = mysqli_fetch_assoc($query);
    }
    //-------------------------------------------------------------------------

    //------Pega nome do perfil no banco de acordo com o usuário logado--------
    $comandoSQL = "SELECT nome_perfil FROM perfil p, usuarios u ";
    $comandoSQL .= "WHERE p.perfil_id = {$tb_usuario["perfil_id"]}";
    $query = mysqli_query($conexao, $comandoSQL);

    if(!$query){
        echo "Falha na consulta ao banco de dados!";
    }else{
        $tb_perfil = mysqli_fetch_assoc($query);
    }
    //-------------------------------------------------------------------------
?>
