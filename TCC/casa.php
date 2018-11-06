<?php

/*if(empty($_SESSION['usuarioLo']))
{
	session_start();
}
else
{
		
}
if (empty($_SESSION['nomeLo']))
{
	$_SESSION["blue"]	=	"Logue primeiro";
	header("Location: login.php");
}
*/
	include "cabecalho.php";
	include "mensagens.php";
	include "arduinoDB.php";

//falta testar com informações do banco

 ?>

 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
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

    	<div class="w3-row-padding w3-center w3-margin-top">
			<div class="w3-card w3-container" style="max-width:1100px">
				<center> 
				  	<h3>Câmera Security home</h3>
				  	<br>
				  
				  	<iframe src="http://192.168.0.6/web/admin.html"  width="1050" height="450"></iframe>
				</center>
			</div>
		</div>
				
	<!-- Botão do historico -->	
	<div class="w3-row-padding w3-center w3-margin-top">
		<div class="w3-third">
		  	<div class="w3-card w3-container" style="min-height:350px">
			  <h3>Histórico ativação</h3><br>
			  <i class="fa fa-history w3-margin-bottom w3-text-theme" style="font-size:120px" onclick="document.getElementById('histAtivacao').style.display='block'"></i>
			  <p>Clique no icone</p>
			  <p>para ver o histórico</p>
			  <p>de ativação do alarme</p>
		 	</div>
		</div>

		
	
		<?php 
				$sistema = conferindo();
							
					//Informando se o alarme esta ativo ou não
					if ($sistema['condicao']=="ligado")
					{
                      	$troca='red';
						echo "<div class='w3-third'>
								  <div class='w3-card w3-container' style='min-height:350px'>			  
									  <center>
									  <br>
									  	<div class='w3-display-container w3-hover-opacity'>					
									  		<img src='imagens/naru.png' alt='ativado' style='max-width:180px'>
												<div class='w3-display-middle w3-display-hover w3-xlarge'>

												<form action='espera.php' method='POST'>                            
					                              <div class='w3-section'> 
					                                <button name='status' type='submit' class='w3-button w3-block w3-{$troca} w3-margin-bottom status' value='0'>
					                                Desligar alarme</button> 
					                              </div>  
					                            </form>
					                            
												</div>
											</div>
											<br>
											<h3>Ligado</h3>
										</center>
							  		</div>
								</div>";
					}
					else if($sistema['condicao']=="desligado")
                    {                      
                      $troca='blue';
						echo "<div class='w3-third'>
								  <div class='w3-card w3-container' style='min-height:350px'>			  
									  <center>
									  <br>
									  	<div class='w3-display-container w3-hover-opacity'>					<img src='imagens/naru-tris.png' alt='desativado' style='max-width:180px'>
												<div class='w3-display-middle w3-display-hover w3-xlarge'>

												<form action='espera.php' method='POST'>                            
					                              <div class='w3-section'> 
					                                <button name='status' type='submit' class='w3-button w3-block w3-{$troca} w3-margin-bottom status' value='1'>
					                                Ligar alarme</button> 
					                              </div>  
					                            </form>

												</div>
											</div>
											<br>
											<h3>Desligado</h3>
										</center>
							  		</div>
								</div>";
					}
					else
                    {
                    	
                      echo "<div class='w3-third'>
								  <div class='w3-card w3-container' style='min-height:350px'>
								  <h3>Erro</h3><br>
								  <img src='imagens/erro.jpg' alt='erro' style='max-width:180px'>
								  <p>Algum erro foi detectado</p>
								  <p>Por favor entre em contato</p>
							  </div>
							</div>";
                      
                    }
				 ?>

				 <!-- Botão do historico -->

		<div class="w3-third">
			<div class="w3-card w3-container" style="min-height:350px">
			  <h3>Histórico alerta</h3><br>
			  <i class="fa fa-history w3-margin-bottom w3-text-theme" style="font-size:120px" onclick="document.getElementById('histAlerta').style.display='block'"></i>
			  <p>Clique no icone</p>
		  	  <p>para ver o histórico</p>
		  	  <p>de ativação do invação</p>
			</div>
		</div>
	</div>
	<!-- Efeito de abrir a pagina -->
	<div id="histAtivacao" class="w3-modal">
		<div class="w3-modal-content w3-animate-top w3-card-4">
			<header class="w3-container w3-black"> 
			    <span onclick="document.getElementById('histAtivacao').style.display='none'" 
			        class="w3-button w3-display-topright">&times;
			    </span>
			    <h3>Histórico de acionamento do alarme</h3>
			</header>
			      
			<div class="w3-container">
			 	<br>
			    <br>
			    <?php 
			        //aqui vai os dados do banco
			    //precisa ser testado
			    	$historico = historico($idcasa);
			    	//estrutura de repetição tipo whle			
				foreach ($historico as $his)
				{
					$data     	= $his["hisStatus"];
					$status		= $his["status"];				
					
					echo "	<tr>							
								<td>{$data}</td>
								<td>{$status}</td>
							</tr>";	
				}

			    ?>
			</div>
			    <footer class="w3-container w3-black">
			        <p>Todos os ocorridos</p>
			    </footer>
    		</div>
  			</div>

  	<div id="histAlerta" class="w3-modal">
		<div class="w3-modal-content w3-animate-top w3-card-4">
			<header class="w3-container w3-black"> 
			    <span onclick="document.getElementById('histAlerta').style.display='none'" 
			        class="w3-button w3-display-topright">&times;
			    </span>
			        <h3>Histórico Alerta</h3>
			</header>
			      
			<div class="w3-container">
			 	<br>
			    <br>
			    <?php 
			        //aqui vai os dados do banco
			    //precisa ser testado
			    	$historico = historico($idcasa);
			    	//estrutura de repetição tipo whle			
				foreach ($historico as $his)
				{
					$data     	= $his["hisStatus"];
					$status		= $his["status"];				
					
					echo "	<tr>							
								<td>{$data}</td>
								<td>{$status}</td>
							</tr>";	
				}

			    ?>
			</div>
			    <footer class="w3-container w3-black">
			        <p>Todos os ocorridos</p>
			    </footer>
    		</div>
  			</div>

  			<br>			
  			
  			<div class="col-sm-12 text-right">
		        <a class="w3-button w3-block w3-black w3-margin-bottom" href="sugestao.php">     
		          <i class="fa fa-check"></i> 
		          Sugestão
		        </a>
		    </div>
  		<!-- Função de ajustar o menu em telas pequenas -->	
	<?php include "menu.js";?>

	<script>
	//Quando um botao da Classe led é clicado
	$( ".status" ).click(function() {
	        // grava o valor da id do pin11, pin12, ou pin13
	        var p = $(this).attr('value');
	 
	        // Envia a requisição via GET para o endereço de IP com o parametro chamado "pin" e valor "p" para executar a função no arduino através do esp8266
	        $.get("http://192.168.0.10:80/", {pin:p});
	 
	});

	</script>
  </body>
</html>

