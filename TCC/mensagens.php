<?php
//SEM PROBLEMAS, GRAÇAS A DEUSX
//mensagens
session_start();

function mostrarMensagem($tipo)
{
	$mensagem ="";
	if(isset($_SESSION[$tipo]))
	{	/*nessa parte a variavel tipo recebe sucesso ou fracasso
		(success ou danger) e determina qual vai ser o tipo de mensagem
		*/
		$mensagem = "<div class='w3-panel w3-center w3-$tipo w3-display-container'>
					  <p>$_SESSION[$tipo]</p>
					 </div>";
		unset($_SESSION[$tipo]);
	}

	return $mensagem;
} 
?>