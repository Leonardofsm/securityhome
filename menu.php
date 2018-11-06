<?php
//PAGINA FUNCIONAL 04/10


//Diferenciação dos menus

	//Menu de qualquer usuario
	if(empty($_SESSION['usuarioLo']))
	{			
			echo "<nav class='w3-sidebar w3-bar-block w3-black w3-animate-left w3-text-write w3-collapse w3-top w3-center' style='z-index:3;width:200px;font-weight:bold' id='mySidebar'><br>
				    <h3 class='w3-padding-64 w3-center '><b>Security<br>Home</b></h3>	    
				    <a href='home.php' class='w3-bar-item w3-button'>Galeria do produto</a> 
				    <a href='login.php'  class='w3-bar-item w3-button'>Entrar</a> 
				    <a href='index.html' class='w3-bar-item w3-button'> Inicio </a>
				    <a href='javascript:void(0)' onclick='w3_close()' class='w3-bar-item w3-button w3-padding w3-hide-large'>Fechar menu</a>
				</nav>

				<header class='w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding-16'>
				    <span class='w3-left w3-padding'>Security Home</span>
				    <a href='javascript:void(0)' class='w3-right w3-button w3-black' onclick='w3_open()'>☰</a>
				</header>";
	}	
	//Menu para os clientes
	else if(isset($_SESSION['usuarioLo']))
	{
		echo "<nav class='w3-sidebar w3-bar-block w3-black w3-animate-left w3-text-write w3-collapse w3-top w3-center' style='z-index:3;width:200px;font-weight:bold' id='mySidebar'><br>
				    <h3 class='w3-padding-64 w3-center '><b>Security<br>Home</b></h3>	    
				    <a href='casa.php' class='w3-bar-item w3-button'>Casa</a>
				    <a href='suporte.php' class='w3-bar-item w3-button'>Suporte</a> 
				    <a href='sair.php'  class='w3-bar-item w3-button'>Sair</a> 
				    <a href='javascript:void(0)' onclick='w3_close()' class='w3-bar-item w3-button w3-padding w3-hide-large'>Fechar menu</a>
				</nav>

				<header class='w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding-16'>
				    <span class='w3-left w3-padding'>Security Home</span>
				    <a href='javascript:void(0)' class='w3-right w3-button w3-black' onclick='w3_open()'>☰</a>
				</header>";
	}		

?>
