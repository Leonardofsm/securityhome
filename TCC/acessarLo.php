<?php

//ESSA PARTE ESTÁ FUNCIONAL 04/10

//incluindo as funções do banco de dados
include "usuarioBD.php";
include "mensagens.php";

//sesseion serve para iniciar uma sessão privada pelo usuario
session_start();
$senha = $_POST["senha"];
$usuario = $_POST["usuario"];

$acesso = consultarUsuario($usuario,$senha); 

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
	//carregando os dados do usuario para levar na sessão
		$_SESSION['idLo'] 			= $acesso["idUsuario"];
		$_SESSION['nomeLo'] 		= $acesso["nome"];		
		$_SESSION['emailLo'] 		= $acesso["email"];			
		$_SESSION['enderecoLo']		= $acesso["endereco"];			
		$_SESSION['numeroLo']		= $acesso["numero"];
		$_SESSION['telefoneLo']		= $acesso["telefone"];
		$_SESSION['usuarioLo']		= $acesso["loginUsuario"];
		
		//para informações do sistema de segurança
		$_SESSION['idcasa']			= $acesso["idCasa"];

	
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
	