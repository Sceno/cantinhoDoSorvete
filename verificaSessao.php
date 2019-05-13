<?php 
    session_start();
		
		if(isset($_SESSION["usuario_id"])){
			include_once("DAO/topoDAO.php");
		}else{
			header("location:login.html");
		}
		
?>