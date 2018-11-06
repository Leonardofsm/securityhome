<?php
//função para conectar o banco de dados ao site
function conectar()
{
	return mysqli_connect("localhost","root","","db_tcc");
}
?>