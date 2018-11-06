<?php
//funcional 04/10
// na vdd tem que testar
	include "arduinoDB.php";
	
	$casa	=	$_GET['casa'];
	$invasao 	=	$_GET['pega']; 
	pega($invasao,$casa);
?>