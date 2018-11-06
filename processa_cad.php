<?php
    //verifica se existe conexão com bd; caso não tenta, cria uma nova
    
    $conexao = mysqli_connect('localhost','leonar34_tcc','S3curity','leonar34_db_tcc')
    //$conexao = mysqli_connect('localhost','root','', 'db_tcc') //porta, usuário, senha
    or die("Erro na conexão com banco de dados"); //caso não consiga conectar mostra a mensagem de erro mostrada na conexão

  

    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $nome = $_POST['nome'];  
    $email = $_POST['email']; 
    $detalhes = $_POST['detalhes'];

    $insert_id = "INSERT INTO formulario (idForm,nomeForm,emailForm,detalhes) VALUES (0,'$nome','$email','$detalhes')"; //String com consulta SQL da inserção

    mysqli_query($conexao, $insert_id); //Realiza a consulta 


    if($conexao->affected_rows >= 0) {  

        
    echo "<script>window.location='index.html';alert('$nome, sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>"; // voltando para pagina inicial apos fazer o login 
    
    echo $conexao->insert_id;   
    echo "<p>Cadastro realizado :) </p>";
} else {
    echo mysql_error();
    echo "Erro, não foi possível inserir no banco de dados";
}

   
?>