<!DOCTYPE html>
<html>
<head>
<?PHP include "cabecalho.php";	

session_start();

?>
	<title>Security Home</title>

</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

	<div class="w3-main" style="margin-top:150px">
		<CENTER>	
			<h1>SECURITY HOME</h1>
		</CENTER>
		<br>
		<br>
		<CENTER>	
			<h3>Carregando...</h3>
			<div id="conteudo">
		    	<img src="imagens/carregando.gif" width="200px" height="200px"> 
			</div>
		</CENTER>
	</div>

	<script type="text/javascript">

	setTimeout("document.location = 'casa.php'", 15000);
	</script>
</body>
</html>

