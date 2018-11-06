<?php 
//PARCIALmente FUNcional

include "conexao.php";

function cadastrarUsuario($nome, $cpf, $email, $endereco, $numero, $telefone, $usuario,$senha)
{
	//conexão como  banco de dados
	$conexao	= conectar();

	//variavel onde é armazenado as outras para salvar no banco de dados 
	$sql = "INSERT INTO usuario VALUES (
		0, '$nome', '$cpf','$email', '$endereco', '$numero', '$telefone', '$usuario','$senha')";

	//retorno da conexão e gravar os dados 	
	return mysqli_query($conexao, $sql);
}
	 
/*
Esse codigo serve para criptografar a senha
$variavel=md5($variavel);
*/

function consultarUsuario($usuario,$senha)
{
	//conexão
	$conexao	= conectar();
	
	//só sera usada depois que tudo for cadastrado
	$sql = "SELECT usu.idUsuario,usu.nome,usu.email,usu.endereco,usu.numero,usu.telefone,usu.loginUsuario,cas.idCasa FROM usuario as usu 
		inner join casa as cas on usu.idUsuario = cas.idCasa where loginUsuario='$usuario' && senhaUsuario='$senha'";

	//variavel de apoio para obter o resultado  $rs 
	$rs= mysqli_query($conexao, $sql);

	$resultado = mysqli_fetch_assoc($rs);	
	
	//retornando o resultado da pesquisa
	return $resultado;
}

 ?>