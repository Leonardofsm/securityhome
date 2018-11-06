<?php
//atulizado mais não completo
include 'conexao.php';


function estado($casa,$alarme)
{
  //conexão como  banco de dados
  $conexao  = conectar();

  //variavel onde é armazenado as outras para salvar no banco de dados 
  $sql = "INSERT INTO alarme VALUES (0,'$casa',CURRENT_TIMESTAMP,'$alarme')";

    //retorno da conexão e gravar os dados  
  return mysqli_query($conexao, $sql);
  }

function conferindo()
{
  //conexão como  banco de dados
  $conexao  = conectar();

  //variavel onde é armazenado as outras para salvar no banco de dados 
  $sql = "SELECT condicao FROM alarme ORDER BY `idAlarme` DESC LIMIT 1";
  
  $rs= mysqli_query($conexao, $sql);

  $resultado = mysqli_fetch_assoc($rs);
  //retornando o resultado da pesquisa
  return $resultado;
}

function historico($idcasa)
{
  //conexão como  banco de dados
  $conexao  = conectar();

  //PRECISA ARRUMAR
  //variavel onde é armazenado as outras para salvar no banco de dados 
  $sql = "SELECT hist.ocorrencia, hist.disparo FROM historico as hist inner join casa as cs on hist.idCasa = cs.idCasa where hist.idCasa = 1";
  
  $rs= mysqli_query($conexao, $sql);

  $resultado = mysqli_fetch_assoc($rs); 
  
  //retornando o resultado da pesquisa
  return $resultado;
}

function pega($ocorrido,$casa)
{
  //conexão como  banco de dados
  $conexao  = conectar();

  //variavel onde é armazenado as outras para salvar no banco de dados 
  $sql = "INSERT INTO historico VALUES (0,$casa,$ocorrido,CURRENT_TIMESTAMP)";

  //retorno da conexão e gravar os dados  
  return mysqli_query($conexao, $sql);
}  
  
?>