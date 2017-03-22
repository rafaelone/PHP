<!DOCTYPE html>

<html lang = "pt">
<head>
	<meta charset = "utf-8">
		<title> Aula PHP</title>
<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>


 	<form action="formulario.php" method="post">
 		<input type="text" placeholder="Usuario" name="usuario">
 		<input type="password" placeholder = "Senha" name="senha">
 		<br>
 		<input type="submit" value="enviar" name="enviar">
 	</form>

 		<?php

	$nomes = array("rafael", "batuta", "ronaldo");

 		if (isset($_POST['enviar'])){
 			//coletando informações
 		$usuario =	$_POST['usuario'];
 		$senha = $_POST['senha'];

 		if (strlen($usuario) < 3){
 			echo "OOO Meu irmão Digita esse nome direito";
 		}
 		if (strlen($usuario) > 15 ) {
 			echo "Não tenta trola aqui não parça";
 		}

 		if (in_array($usuario, $nomes)){ // vai ver se o nome que eu passei esta dentro do array
 				echo "Bem vindo " .$usuario;
 		}else{
 			echo "Você esta bloqueado";
 		}
 		/*echo "Seu nome de usuario é: " .$usuario;
 		echo"<br>";
 		echo "Descobri sua senha: " .$senha;*/
 		}

 	?>

 </div>
</body>
</html>