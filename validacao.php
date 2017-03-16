<!DOCTYPE html>

<html lang = "pt">
<head>
	<meta charset = "utf-8">
		<title> Aula PHP</title>
<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
 	
 	<?php
 		if (isset($_POST['enviar'])){
 			//coletando informações
 		$usuario =	$_POST['usuario'];
 		$senha = $_POST['senha'];
 		$email = $_POST['email'];
 		$cidade = $_POST['cidade'];
 		$estado = $_POST['estado'];

 		$erro = false;

 		if (strlen($usuario ) < 5 || strlen($usuario) > 10){
 			echo "Digite um usuario valido";
 			echo "<br>";
 			$erro = true;
 		}
 		if (strlen($senha) <4){
 			echo "Digite uma senha com + de 4 digitos";
 			echo "<br>";
 			$erro = true;
 		}
 		if (!strstr ($email , "@")){
				echo "Faltou o @";
				echo "<br>";
				$erro = true;
 		}

 		if (strlen($estado ) != 2){
 			echo "Digite a sigla do estado";
 			echo "<br>";
 			$erro = true;
 		}

 		if (!$erro){
 			echo "Todos os dados foram preenchidos corretamente";
 		}

 		}


 	
 	
 	?>
 	</div>
</body>
</html>