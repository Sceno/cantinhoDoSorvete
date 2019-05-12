<?php 
    session_start();
    
    include_once("conexao.php");
    
    

    if(isset($_POST["email"])){
        
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        $retorno = false;
        
        $comandoSQL = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}'";
        
        $query = mysqli_query($conexao, $comandoSQL);
        if(!$query){
            echo "Falha na consulta ao banco de dados!";
        }else{
            while($usuario = mysqli_fetch_assoc($query)){
                if ($email == $usuario["email"] or $senha = $usuario["senha"]){
                    global $retorno;
                    $retorno = true;
                    $_SESSION["usuario"] = $usuario["email"];
                }else{
                    global $retorno;
                    $retorno = false;
                }
            }
        }
        echo $retorno;
    }
    
?>