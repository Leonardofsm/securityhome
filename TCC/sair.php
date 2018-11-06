<?php
//precisa testar
	session_start();
//Para destruir as informações criadas dos usuarios
	
	unset(
		$_SESSION['idLo'],
		$_SESSION['nomeLo'],
		$_SESSION['cpfLo'],
		$_SESSION['emailLo'],
		$_SESSION['enderecoLo'],
		$_SESSION['numeroLo'],
		$_SESSION['telefoneLo'],
		$_SESSION['usuarioLo']
		 );

	header("Location: home.php")

?>