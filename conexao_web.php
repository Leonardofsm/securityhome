<?php
//função para conectar o banco de dados ao site
function conectar()
{
	return mysqli_connect("162.241.2.126","leonar34_tcc","S3cur1ty","db_tcc");
}
?>

<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "db_tcc";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	?> 

	<?php
//função para conectar o banco de dados ao site
function conectar()
{
	return mysqli_connect("localhost","root","","db_tcc");
}
?>
 