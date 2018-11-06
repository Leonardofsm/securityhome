<?php
//funcional 04/10
// na vdd tem que testar
	include "arduinoDB.php";
	
	$alarme	=	$_GET['alarme'];
	$casa 	=	$_GET['casa']; 
	$status = $alarme;

	if($alarme == 0)
	{
		$alarme = "desligado";
	}
	else
	{
		$alarme = "ligado";
	}
 	estado($casa,$alarme);
 		
?>
