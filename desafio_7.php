<!DOCTYPE html>

<html lang = "pt">
<head>
	<meta charset = "utf-8">
		<title> Aula PHP</title>
<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>

<form action="validacao.php" method="post">
	<label for="usuario">Usuario</label>
		<input type="text" name="usuario" placeholder="Digite o nome de usuario">
		<br>
	<label for="senha">Senha</label>
		<input type="password" name="senha" placeholder="Digite sua senha" >
		<br>
	<label for="email">Email</label>
		<input type="text" name="email" placeholder="Digite seu email" >
		<br>
	<label for="cidade">Cidade</label>
		<input type="text" name="cidade" placeholder="Digite nome da sua cidade" >
		<br>
	<label for="estado">Estado</label>
		<input type="text" name="estado" placeholder="Digite o nome do seu estado" >
		<br>
	<input type="submit" value ="enviar" name="enviar">
</form>


 	<?php
 	
 	?>
 	</div>
</body>
</html>