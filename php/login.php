<?php 
    session_start();
    
    include_once("conexao.php");
    
    $mensagem = ""; 

    if(isset($_POST["email"])){
        
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        $comandoSQL = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}'";
        
        $query = mysqli_query($conexao, $comandoSQL);
        if(!$query){
            echo "Falha na consulta ao banco de dados!";
        }else{
            while($usuario = mysqli_fetch_assoc($query)){
                if($email != $usuario["email"]){
                    
                    $mensagem = "Usuario ou senha inválidos!";
                }else{
                    $_SESSION["usuario"] = $usuario["nome"];
                    $mensagem = "Login efetuado com sucesso!";
                }
            }
        }
    }
    echo $mensagem;
?>