<?php
//FUNCIONAL, TALVEZ PRECISE DE UMA ESTILIZADA  
  include "cabecalho.php";
  include "mensagens.php";
  include "menu.php"; 
?>
<!-- Passando o tamanho maximo para a pagina -->
<body class="w3-light-grey w3-content" style="max-width:1600px">
    
  <!-- incluindo o menu -->
  <?php include "menu.php"; ?>
  
  <!-- Efeito de sobreposição para quando a tela estiver pequena -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity " onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- Conteudo da pagina! Com margem para a fixagem do menu -->
  <div class="w3-main" style="margin-left:200px">

    <!-- Realocando a pagina para telas pequenas --> 
    <div class="w3-hide-large" style="margin-top:83px">
      
    </div>

      <!-- Iniciando mensagens para informar as ações -->
      <?php echo mostrarMensagem("black");   ?>
      <?php echo mostrarMensagem("blue");  ?>

      <!-- Dados para acessar -->
      <center>
       <h4 class="w3-center"><b>Acesso</b></h4>
          <p class="w3-center">Faça o login para se conectar com sua casa</p>
          <p class="w3-center">Ou entre em contato para pedir seu produto!</p>

          <!-- Formulario para acessar -->
          <form action="acessarLo.php" method="POST" ">
            <div class="w3-section" style="margin-left: 1em">
              <label>Usuario</label>
              <input class="w3-input w3-border" style="max-width:20em" type="text" name="usuario" required>
            </div>

            <div class="w3-section" style="margin-left: 1em">
              <label>Senha</label>
              <input class="w3-input w3-border" style="max-width:20em" type="password" name="senha" required>
            </div>

            <div class="w3-section" style="margin-left: 1em">
              <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom" style="max-width:10em">
              Acessar
              </button>
            </div>
          </form>
      </center>
    </div>
  </div>

  <!-- Função de ajustar o menu em telas pequenas --> 
    <?php include "menu.js"; ?>

  </body>
</html>