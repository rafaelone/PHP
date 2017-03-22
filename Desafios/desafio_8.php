<?php

if (isset($_POST['enviar'])){
	$connection  = mysqli_connect('localhost', 'root', 'fiap', 'desafio');
		if (!$connection){
			die("deu ruim parça");
		}

		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		$query = "insert into cadastro (username, password, email) values ('$username', '$password', '$email')";
		$resultado = mysqli_query ($connection, $query);

		if (!$resultado){
			die("Não deu certo o cadastro" . mysqli_error());
		}else{
			echo "<div class ='alert alert-success'>Dados cadastrados</div>";
		}
}
?>



<!DOCTYPE html>

<html lang = "pt">
<head>
	<meta charset = "utf-8">
		<title> Aula PHP</title>
<link rel="stylesheet" type="text/css" href="_css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="col-sm-6">
		<form action ="desafio_8.php" method="post">
		<div class="form-group" >
			<label for="username" class="control-label"> Usuario</label>
				<input type="text" name="username" id="username" placeholder="Nome de usuario" class="form-control" >
 		</div>
 		<div class="form-group">
 			<label class="password" class="control-label">Senha</label>
 				<input type="password" name="password" id="password" placeholder="Sua senha" class="form-control">
 		</div>
 		<div class="form-group">
 			<label for="email" class="control-label">E-mail</label>
 				<input type="text" name="email" id="email" placeholder="email" class="form-control">
 		</div>
 		<div class="form-group">
 			<input type="submit" name="enviar" value="Cadastrar" class="btn btn-primary">
 			<button class="btn btn-info"><a href="desafio_8_read.php">Pesquisar</a></button>
 		</div>
 		</form>
 	</div>
 </div>
</body>
</html>