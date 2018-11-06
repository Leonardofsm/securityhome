<?php
//funcional 04/10
// na vdd tem que testar
	include "arduinoDB.php";
	$ardudb = new arduinoDB();
	
	$casa	=	$_GET['casa'];
	$invasao 	=	$_GET['pega']; 

	if ($invasao==5)
	{
		$invasao="A Luz do local pegou algo";
	}
	else if ($invasao==6)
	{
		$invasao="Algo passou pelo sensor";
	}

	$ardudb->pega($casa,$invasao);
 	
 	$usu = $ardudb->mandaEmail($casa);

	$nome = $usu['nome'];
	$destinoEmail = $usu['email'];
	$telefone = $usu['telefone'];

	$data_envio = date('d/m/Y');
	$hora_envio = date('H:i:s');
	$arquivo = "
	  <style type='text/css'>
	  body {
	  margin:0px;
	  font-family:Verdane;
	  font-size:12px;
	  color: #666666;
	  }
	  a{
	  color: #666666;
	  text-decoration: none;
	  }
	  a:hover {
	  color: #FF0000;
	  text-decoration: none;
	  }
	  </style>
	    <html>
	        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
	            <tr>
	              <td>
	  <tr>
	                 <td width='500'>Nome:$nome</td>
	                </tr>
	                <tr>
	                  <td width='320'>E-mail:<b>Security Home</b></td>
	     </tr>
	     <tr>
	                  <td width='320'>$invasao</td>
	                </tr>
	                <tr>
	                  <td width='320'>Mensagem: Confira sua casa, seu sistema captou alguma coisa 
	                  </td>
	                </tr>
	            </td>
	          </tr>  
	          <tr>
	            <td>
	            	Este e-mail foi enviado em 
	            	<b>$data_envio</b> às 
	            	<b>$hora_envio</b>
	            </td>
	          </tr>
	        </table>
	    </html>
  ";

  //enviar
   
  // emails para quem será enviado o formulário
  $assunto = "Security Home - Alerta";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$destinoEmail>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destinoEmail, $assunto, $arquivo, $headers);


	//ip do server: 162.241.2.126

?>