<?php 
//falta testar com informações do banco

include "cabecalho.php";
include "mensagens.php";
include "arduinoDB.php";

 ?>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!-- Passando o tamanho maximo para a pagina -->
<body class="w3-light-grey w3-content" style="max-width:1600px">
    
  <!-- incluindo o menu -->
  <?php include "menu.php"; ?>

  <!DOCTYPE html>
<html>
<head>
	<title>CÂMERA SECURITY HOME</title>
		<section class="banner-area" id="home">	
				<div class="container">
				 	<div class="row fullscreen d-flex align-items-center justify-content-center"> 
						<div class="banner-content col-lg-7">
						<!--	<h1>
								Security Home				
							</h1> --> 
							
						</div>											
					</div>
				</div>
			</section>
</head>
<body>

</body>
</html>
  
  <!-- Efeito de sobreposição para quando a tela estiver pequena -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- Conteudo da pagina! Com margem para a fixagem do menu -->
  <div class="w3-main" style="margin-left:200px">

    <!-- Realocando a pagina para telas pequenas --> 
    <div class="w3-hide-large" style="margin-top:83px">
    	
    </div>
    	<!-- Iniciando mensagens para informar as ações -->
    	<?php echo mostrarMensagem("black");   ?>
    	<?php echo mostrarMensagem("blue");  ?>




    	
				