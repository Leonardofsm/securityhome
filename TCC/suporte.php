<?php 
//precisa testar
include "cabecalho.php"; 
include "mensagens.php";
?>
<!-- Passando o tamanho maximo para a pagina -->
<body class="w3-light-grey w3-content" style="max-width:1600px">
  <!-- se não colocar aqui não é carregado as informações -->
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
      <!-- Layout para informações -->
       <div class="w3-container w3-light-grey w3-padding-10 w3-padding-large" id="sugestao">
        <div class="w3-content w3-row-padding" >        
      		<main class="col-md-12">  
            <h1 class="text-center font-italic font-weight-light" >Suporte ao cliente</h1>
              <div class="alert alert-info" role="alert">
            		<h3 class="font-weight-light">Local para solicitar auxilio da empresa.</h3>
              </div>
            <h2 class="text-center" >Descreva o ocorrido</h2>
            <!-- Espaço para digitar as informações -->
            <form action="sobreLi.php" enctype="multipart/form-data" method="POST">
              <textarea rows="8" cols="100" placeholder="Digite aqui com alguns detalhes objetivo o motivo do seu contato"  maxlength="650"></textarea>
              <br>
              <!-- Botão para enviar as informações -->
              <button class="w3-button w3-black w3-round-xlarge" type="submit">
                <i class="fa fa-check"></i> 
                Solicitar auxilio
              </button>
            </form> 
      		  </main>
          </div>
        </div>
      </div>
    </div>
    <!-- Função de ajustar o menu em telas pequenas -->  
    <?php include "menu.js"; ?>
</body>
</html>