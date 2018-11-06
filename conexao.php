<?php
/*
	// Acesso Servidor 
	$servidor = "localhost";
	$usuario = "leonar34_tcc";
	$senha = "S3curity";
	$dbname = "leonar34_db_tcc"; 

	$servidor = "localhost";
	$usuario = "root";
	$senha = ""; 
	$dbname = "db_tcc"; 
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	*/
	?> 

	<?php
//função para conectar o banco de dados ao site
function conectar()
{
	 //mysqli_connect("localhost","root","","db_tcc")
	return mysqli_connect("localhost","leonar34_tcc","S3curity","leonar34_db_tcc")

	or die("Erro na conexão com Banco de Dados"); 
}
?>
 