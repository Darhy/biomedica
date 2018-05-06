<?php
	ini_set('display_errors', 1);
	//requirindo o arquivo de configuração local do sistema caso exista
	if( file_exists("app/config_local.php") ){
		//requirido
		require_once("app/config_local.php");
	}
	//requirindo o arquivo de configuração do sistema
 	require_once("app/config.php"); 

 ?>
<!DOCTYPE html>
<html lang="pt-ao">
	<head>
		<meta charset="UTF-8">
		<title>Biomedica</title>
	</head>
	<body>
		DOMINI: <?php echo URL; ?>	
	</body>
</html>