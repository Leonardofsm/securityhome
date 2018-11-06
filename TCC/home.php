<?php 
//falta fotos do produto
include "cabecalho.php";
include "mensagens.php";
 ?>

<!-- Passando o tamanho maximo para a pagina -->
<body class="w3-light-grey w3-content" style="max-width:1600px">
    
  <!-- incluindo o menu -->
  <?php include "menu.php"; ?>
  
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
        
        
    <!-- explansão da foto-->
    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
      <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
      <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption"></p>
      </div>
    </div>
    

    <!-- Info no site -->
    <div class="w3-container w3-blue w3-center w3-text-light-grey w3-padding-32" id="about">
      <h3><b>Security Home</b></h3>
      <br>
      <h5><b>Galeria de satisfação</b></h5>
      <img src="imagens/icon.png" alt="Me" class="w3-image w3-padding-32" width="250" height="250">
      <div class="w3-content w3-justify" style="max-width:600px">
        <!-- Fotos do projeto -->
    <?php include "imgPro.php"; ?>
        <h4>Nossa Empresa</h4>
        <p>Somos uma Empresa Nova no mercado que tem o intuito de trazer a segurança por um custo beneficio alto. <br>
          Ao pesquisar o valor em media no mercado, resolvemos fazer um trabalho mais acessivel e confiavel, pois a segurança hoje em dia 
          é algo que precisa ser investida, por isso temos a intenção de fazer com que a maioria da população tenha essa comodidade. 
        </p>        
        <hr class="w3-opacity">
      
        </div>
      </div>
    </div>
  <!-- Fim do conteudo -->
  </div>
   <!-- Função de ajustar o menu em telas pequenas -->  
    <?php include "menu.js"; ?>
  </body>
</html>
