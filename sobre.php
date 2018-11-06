<?php 
//SÓ PRECISA EDITAR A FOTO DO JACK
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
        
      <!-- Informações sobre os fundadores da empresa -->
     <div class="w3-container w3-light-grey w3-padding-10 w3-padding-large" id="sobre">
      <div class="w3-content w3-row-padding" >
      <article class="w3-col md12">   
        <table>   
          <tr>
            <td>
              <h1>Fundadores </h1>    
            </td>
          </tr>
          <tr>
            <td>   
              <figure class="foto-fundador">
                
                <img src="imagens/azul.jpg" onclick="onClick(this)">
                <figcaption>
                <h3>Guilherme Vinicius</h3>
                </figcaption>
              </figure>
            </td>
            <td>   
              <figure class="foto-fundador">
                <img src="imagens/jack.jpg" onclick="onClick(this)">
                <figcaption>
                  <h3>Jackson Santana</h3>
                </figcaption>
              </figure>
            </td>
           
            <td>
                <figure class="foto-fundador">
                  <img src="imagens/leo.jpg" onclick="onClick(this)">
                  <figcaption>
                    <h3>Leonardo Felipe</h3>
                  </figcaption>
                </figure>  
              </td>
            </tr>
            <tr>
            <td>
              <figure class="foto-fundador">
                <img src="imagens/fer.jpg" onclick="onClick(this)">
                <figcaption>
                  <h3>Fernanda</h3>
                </figcaption>
              </figure>
            </td>
            <td>
              <figure class="foto-fundador">
              <img src="imagens/moranguete.jpg" onclick="onClick(this)">
              <figcaption>
                <h3>Gabriel Moretti</h3>
              </figcaption>
              </figure>
            </td>
            <td>       </td>
            </tr>
          </article>
        </table>
      </div>
      <div class="col-sm-12 text-right">
        <a class="w3-button w3-block w3-black w3-margin-bottom" href="sugestao.php">     
          <i class="fa fa-check"></i> 
          Sugestão
        </a>
      </div>
    </div> 
  </div>    
   <!-- Função de ajustar o menu em telas pequenas -->  
    <?php include "menu.js"; ?>
  </body>
</html>