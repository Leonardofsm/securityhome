<?php

//Pagina corrigida e protegida de sql injection 01/11

//incluindo as funções do banco de dados
//include "usuarioBD.php";
include "mensagens.php";
require_once 'usuarioBD.php';

//sesseion serve para iniciar uma sessão privada pelo usuario
session_start();

$db = new usuarioDB();

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$acesso = $db->consultarUsu($usuario,$senha);

//Verificando se a informações do menu
if(empty($acesso))
{
	//informando erro
		$_SESSION["black"]	=	"Usuario ou senha incorretos";
		
	    header ('Location: login.php');
}
//Confirmando existe o usuario
else if(isset($acesso))
{
	//sesseion serve para iniciar uma sessão privada pelo usuario
	session_start();
	//carregando os dados do usuario para levar na sessão
		$_SESSION['idLo'] 			= $acesso["idUsuario"];
		$_SESSION['nomeLo'] 		= $acesso["nome"];		
		$_SESSION['emailLo'] 		= $acesso["email"];			
		$_SESSION['enderecoLo']		= $acesso["endereco"];			
		$_SESSION['numeroLo']		= $acesso["numero"];
		$_SESSION['telefoneLo']		= $acesso["telefone"];
		$_SESSION['usuarioLo']		= $acesso["loginUsuario"];
				
		//para informações do sistema de segurança
		$_SESSION['idcasa']			= $acesso['idCasa'];

		//para pegar o plano
		if ($acesso['plano']=="basico") 
		{
			# code...
			$_SESSION['planoN']			= 10;
		}
		else if ($acesso['plano']=="intermediario")
		{
			# code...
			$_SESSION['planoN']			= 30;
		}
		else
		{
			$_SESSION['planoN']			= 50;	
		}		
	
		//retorna o sucesso do login
		$_SESSION["blue"]	=	"Bem vindo ".$_SESSION['nomeLo'];
	    header('Location: casa.php');
}
//suposto erro
else
{
	//Informando que o procedimento não foi concluido
	$_SESSION["black"]	=	"Preencha todos os campos";
		
	header('Location: login.php');
}
?>	
	