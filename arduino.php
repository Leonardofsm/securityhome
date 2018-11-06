<?php

include "arduinoDB.php";
?>
 
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body> 
        <center>
                <!-- Titulos -->
                <h1>Automacao ESP8266 e Arduino</h1>
                <h2>Controle de Cargas</h2>     
                <?php
                     $sistema = conferindo();               
                  if ($sistema['status']==1)
                    {
                      $color='blue';
                      $troca='red';
                      echo "";
                      echo "<form action='arduinoDB.php' method='POST'>
                              <div class='w3-container w3-{$color}'>
                                 <h3>Alarme Ligado</h3>                                 
                                </div>
                              <div class='w3-section'> 
                                <button name='status' type='submit' class='w3-button w3-block w3-{$troca} w3-margin-bottom status' value='0'>
                                Alarme Ligado</button> 
                              </div>  
                            </form>";                       
                    }
                    else if($sistema['status']==0)
                    {
                      $color='red';
                      $troca='blue';
                      echo "<form action='arduinoDB.php' method='POST'>
                              <div class='w3-container w3-{$color}'>
                                 <h3>Alarme Desligado</h3>                                 
                                </div>
                              <div class='w3-section'> 
                                <button name='status' type='submit' class='w3-button w3-block w3-{$troca} w3-margin-bottom status' value='1'>
                                Alarme desligado</button> 
                              </div>  
                            </form>"; 
                    }
                    else
                    {

                      echo "Erro, tente mais tarde";
                      
                    }

                ?>
                  </p>
                 
                  
 
        </center>

<script>
//Quando um botao da Classe led é clicado
$( ".status" ).click(function() {
        // grava o valor da id do pin11, pin12, ou pin13
        var p = $(this).attr('value');
 
        // Envia a requisição via GET para o endereço de IP com o parametro chamado "pin" e valor "p" para executar a função no arduino através do esp8266
        //$.get("http://192.168.100.13:80/", {pin:p});
        $.get("http://192.168.100.13:80/", {pin:p});
 
});
</script>

</body>
</html>