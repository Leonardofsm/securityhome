<?php

 

include("conexao.php");

mysql_connect($host,$user,$senha);

mysql_select_db($banco);

 

 

if(isset($_POST['nl-assinar']) && $_POST['nl-assinar'] == "Assinar"){

$email = $_POST['newsletter'];

$sql = "INSERT INTO emails VALUES(NULL,'$email')";

 

if(mysql_query($sql)){

echo "<script>alert('Seu email foi cadastrado com sucesso!');location='../index.php';</script>";

}else{

echo "<script>alert('Falha ao efetuar cadastro!');location='../index.php';</script>";

}

}

 

 

 

?>