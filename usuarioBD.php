<?php 
//Atende as necessidades do site 1/11
class usuarioDB
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
	function consultarUsu($usuario,$senha)
	{
		$stmt = $this->con->prepare("SELECT usu.idUsuario,usu.nome,usu.email,usu.endereco,usu.numero,usu.telefone,usu.loginUsuario,cas.idCasa, sis.plano FROM usuario as usu 
		inner join casa as cas on usu.idUsuario = cas.idCasa
		inner join sistema as sis on usu.idUsuario = sis.idUsuario where loginUsuario = ? && senhaUsuario = ?");
		$stmt->bind_param("ss", $usuario, $senha);
		$stmt->execute();
		$stmt->bind_result($idUsuario, $nome, $email, $endereco, $numero,$telefone, $loginUsuario,$idCasa,$plano);
				

		while($stmt->fetch())
		{
			$usu  = array();
			$usu['idUsuario'] = $idUsuario; 
			$usu['nome'] = $nome;  
			$usu['email'] = $email;
			$usu['endereco'] = $endereco; 
			$usu['numero'] = $numero;
			$usu['telefone'] = $telefone; 
			$usu['loginUsuario'] = $loginUsuario;
			$usu['idCasa'] = $idCasa;
			$usu['plano'] = $plano;  

			array_push($usuarios, $usu); 
		}
		
		return $usu;
	}
	/*function cadastrarUsuario($nome, $cpf, $email, $endereco, $numero, $telefone, $usuario,$senha)
{
	//conexão como  banco de dados
	$conexao	= conectar();

	//variavel onde é armazenado as outras para salvar no banco de dados 
	$sql = "INSERT INTO usuario VALUES (
		0, '$nome', '$cpf','$email', '$endereco', '$numero', '$telefone', '$usuario','$senha')";

	//retorno da conexão e gravar os dados 	
	return mysqli_query($conexao, $sql);
}
*/	 
/*
Esse codigo serve para criptografar a senha
$variavel=md5($variavel);
*/
}
 ?>