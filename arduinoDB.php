<?php
//atulizado 1/11/18
//FALTA TESTAR OS INSERT INTO, O RESTANTE ESTAVA PEGANDO

class arduinoDB
{ 
  //Database connection link  
  private $con;
 
  //Class constructor
  function __construct()
  {
    //Getting the DbConnect.php file
    require_once dirname(__FILE__) . '/DbConnect.php';
 
    //Creating a DbConnect object to connect to the database
    $db = new DbConnect();
 
    //Initializing our connection link of this class
    //by calling the method connect of DbConnect class
    $this->con = $db->connect();
  }

  function conferindo($idcasa)
  {
    //conexão como  banco de dados
   $stmt = $this->con->prepare("SELECT condicao,hisStatus FROM alarme where idCasa = ? ORDER BY idAlarme DESC LIMIT 1");
      $stmt->bind_param("i", $idcasa);
      $stmt->execute();
      $stmt->bind_result($condicao,$hisStatus); 
      $condicoes = array();
      while($stmt->fetch())
      {
        $cond  = array();
        $cond['condicao']  = $condicao;
        $cond['hisStatus'] = $hisStatus; 
        array_push($condicoes, $cond); 
      } 
      return $cond;
  }
  function estado($casa,$alarme)
  {
    $stmt = $this->con->prepare("INSERT INTO alarme VALUES (0,?,CURRENT_TIMESTAMP,?)");
    $stmt->bind_param("is", $casa,$alarme);
    if($stmt->execute())
        {return true;} 
    else
      {return false;} 
  }

  function histAtivacao($idcasa,$plano)
  {
    $stmt = $this->con->prepare("SELECT hisStatus, condicao FROM alarme where idCasa = ? ORDER BY idAlarme DESC LIMIT ?");
    $stmt->bind_param("is", $idcasa,$plano);
    $stmt->execute();
    $stmt->bind_result($hisStatus, $condicao);        

    $historico = array();
    while($stmt->fetch())
    {
      $his  = array();
      $his['hisStatus'] = $hisStatus; 
      $his['condicao'] = $condicao; 
      array_push($historico, $his); 
    }    
    return $historico;
  }

  function histPega($idcasa,$plano)
  {
    $stmt = $this->con->prepare("SELECT ocorrencia, disparo FROM historico  where idCasa =? order by idHistorico DESC LIMIT ?");
    $stmt->bind_param("is", $idcasa,$plano);
    $stmt->execute();
    $stmt->bind_result($ocorrencia, $disparo);        

    $historico = array();
    while($stmt->fetch())
    {
      $his  = array();
      $his['ocorrencia'] = $ocorrencia; 
      $his['disparo'] = $disparo; 
      array_push($historico, $his); 
    }    
    return $historico;
  }  

  function histEmail($idcasa,$plano)
  {
    //conexão como  banco de dados
    $conexao  = conectar();

    //PRECISA ARRUMAR
    //variavel onde é armazenado as outras para salvar no banco de dados 
    $sql = "SELECT alt.email,alt.sms,alt.momento from alerta as alt inner join casa as cs on alt.idCasa = cs.idCasa where idCasa='$idcasa' DESC LIMIT '$plano'";
    
    $rs= mysqli_query($conexao, $sql);

    $resultado = mysqli_fetch_assoc($rs); 
    
    //retornando o resultado da pesquisa
    return $resultado;
  }

 function pega($idcasa,$ocorrido)
  {
    try
    {
      $stmt = $this->con->prepare("INSERT INTO historico VALUES (0,?,?,CURRENT_TIMESTAMP)");
      $stmt->bind_param("is", $idcasa,$ocorrido);    
      $erro = $stmt->execute();
      return $erro;  
    }
    catch(PDOException $e)
    {
      echo "Error: " . $e->getMessage();
    }
  }

  function mandaEmail($casa)
  {
    $stmt = $this->con->prepare("SELECT nome,email,telefone FROM usuario as usu    
     where idCasa = ?");
    $stmt->bind_param("i", $casa);
    $stmt->execute();
    $stmt->bind_result($nome, $email, $telefone);
      
    $usuarios = array();  

    while($stmt->fetch())
    {
      $usu  = array();      
      $usu['nome'] = $nome;  
      $usu['email'] = $email;
      $usu['telefone'] = $telefone;
      array_push($usuarios, $usu); 
    }    
    return $usu;
  }

}
  
?>