<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php 
	include_once("verificaSessao.php"); 
	//include_once("upload.php");
?>

<?php

	if(isset($_POST["enviar"])){
		include_once("upload.php");
	}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Cantinho do Sorvete | </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/meuEstilo.css" rel="stylesheet" type="text/css" media="all">
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->

</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
                         	 
		 <!-------- O CÓDIGO ABAIXO INSERE O TOPO DA PÁGINA ------->		 
		 		<?php include_once("topo.php"); ?>
		 <!-------------------------------------------------------->
		 
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });		 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
		<div class="container-fluid">
			<h2>Cadastrar novo Usuário</h2>
			<div class="col-md-6">
				<form id="form" action="blank.php" method="post" enctype="multipart/form-data">

					<input type="hidden" name="MAX_FILE_SIZE" value="3145728"> <!--Tamanho maximo de um arquivo, em bytes, que poderá sofrer upload neste formulário-->
					<div class="form-group" data-validate = "Informe o e-mail">
						<label>Nome: </label>
						<input class="form-control" type="text" name="email">
					</div>

					<div class="form-group" data-validate="Informe a senha">
						<label>Senha: </label>
						<input class="form-control" type="password" name="senha">
					</div>

					<div class="form-group" data-validate="Informe a senha novamente">
						<label>Repita a senha: </label>
						<input class="form-control" type="password" name="senha">
					</div>

					<div class="form-group">
						
					</div>

					<div class="form-group" data-validate="Informe a senha">
						<input id='botao' class="form-control" type="submit" name="enviar" value="criar">
					</div>
						<p id="msg"></p>
					</div>
			
					<div id="divImgUsuario" class="col-md-6">
						<input id="upload" class="form-control" type="file" name="upload_file">
						<!-- O label abaixo, com uma tag imagem dentro, assumiu o papel do input acima. 
						Ou seja, ao clicar na imagem poderemos escolher o arquivo e não mais no botão que foi 
						escondido por meio de atributos CSS, no arquivo 'meu estilo.css'.-->
						<label id="upload_btn" for="upload"><img id="imgUsuario" src="images/cameraColorida.png"/></label>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--inner block end here-->

<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>

	<!-------- O CÓDIGO ABAIXO INSERE O MENU LATERAL ------->		 
	<?php include_once("menuLateral.php"); ?>
	<!-------------------------------------------------------->		

	<!-------- O CÓDIGO ABAIXO ESCONDE O MENU LATERAL ------->		 
	<script src="js/minimizarMenuLateral.js"></script>
	<!-------------------------------------------------------->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->

<script>

	var extensaoValida = false;
	var extensao = "";
	var nameDoInputTipoFile = "";
	var diretorioUpload = "";
	var identificadorFusoHorario = "";

	$('#upload').change(function(){
		
		var nomeArquivo = $(this)[0].files[0].name;
		extensao = nomeArquivo.substring(nomeArquivo.lastIndexOf("."));

		if(extensao == ".jpg" || extensao == ".png" || extensao == ".bmp" || extensao == ".jfif"){
			const file = $(this)[0].files[0];
			const fileReader = new FileReader();
			fileReader.onloadend = function(){
				$('#imgUsuario').attr('src', fileReader.result);
			}
			fileReader.readAsDataURL(file);

			nameDoInputTipoFile = $(this).attr('name');
			diretorioUpload = "upload.php";
			identificadorFusoHorario = "America/Bahia";

			extensaoValida = true;

		}else{
			$('msgErro').html("São válidas apenas as extensões '.jpg', '.png', '.jfif' e 'bmp'.");
		}
	});

		$('#botao').click(function(e){
			e.preventDefault();
			var dadosForm = $(this).serialize();
			if(extensaoValida == true){
				$.ajax({
					type: "post",
					url: "blank.php",
					data: dadosForm,
					async: false
				}).done(function(){
					console.log("TUDO CERTO NA RETORNO DA CHAMADA AJAX: ");
				}).fail(function(){
					console.log("DEU MERDA NO RETORNO DA CHAMADA AJAX!");
				})
			}
		});

/*
	$('#botao').click(function(e) {
		e.preventDefault();
		var dadosForm = $(this).serialize();
		
		$.ajax({
			type: "post",
			url: "update.php",
			data: dadosForm,
			async: false
		}).done(function(){
			
		})
	});

	*/
	
</script>
</body>
</html>


                      
						
