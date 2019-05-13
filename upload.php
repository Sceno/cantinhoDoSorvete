<?php 
	$mensagem = "";
	$arquivoPermitido=false;

	function console_log( $data ){
		echo '<script>';
		echo 'console.log('. json_encode( $data ) .')';
		echo '</script>';
	}
	  

	$array_erro = array(
		UPLOAD_ERR_OK => "Sem erro.",
		UPLOAD_ERR_INI_SIZE => "O arquivo enviado excede o limite definido na diretiva upload_max_size.",
		UPLOAD_ERR_FORM_SIZE => "O arquivo enviado excede o limite definido em MAX_FILE_SIZE no formulário.",
		UPLOAD_ERR_PARTIAL => "O upload do arquivo foi feito parcialmente.",
		UPLOAD_ERR_NO_FILE => "Nenhum arquivo foi enviado.",
		UPLOAD_ERR_NO_TMP_DIR => "Pasta temporária ausente.",
		UPLOAD_ERR_CANT_WRITE => "Falha em escreve o arquivo em disco.",
		UPLOAD_ERR_EXTENSION => "Uma extensão do PHP interrompeu o upload do arquivo."
	);
		//$extensao = strrchr($_FILES['upload_file']['name'], ".");
	
		//if($extensao == ".png" || $extensao == ".jpg" || $extensao == ".jfif" || $extensao == ".bmp"){
		$alfabeto = "0123456789ABCDEFGHIJKLMONPQRSTUVXWYZ";
		$tamanho = 10;
		$letra = "";
		$resultado = "";

		for ($i = 1; $i < $tamanho ; $i++){
			$letra = substr($alfabeto , rand(0,strlen($alfabeto)) , 1);
			$resultado .= $letra;
		}

		date_default_timezone_set('America/Bahia');
		$agora = getdate();

		$codigo_data = $agora['mday'] . "_" . $agora['mon'] . "_" . $agora['year'];
		$codigo_data .= "__" . $agora['hours'] . "_" . $agora['minutes'] . "_" . $agora['seconds'];
		$nome_arquivo_temporario = $_FILES['upload_file']['tmp_name'];
		$nome_arquivo = $codigo_data . "_" . $resultado . "_" . $_FILES['upload_file']['name'];
		$diretorio = "uploads";
		$upload = move_uploaded_file($nome_arquivo_temporario, $diretorio . "/" . $nome_arquivo);
		if($upload){
			$mensagem = "Arquivo carregado com sucesso!";	
		}else{
			$numero_erro = $_FILES['upload_file']['error'];
			$mensagem = $array_erro[$numero_erro];
		}

	echo $mensagem;	

?>