<?php
if (isset($_POST['enviar'])){
	$connection = mysqli_connect('localhost', 'root', 'fiap', 'loginapp');
	if (!$connection){
		die("vish deu ruim");
	}

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";
	$resultado = mysqli_query($connection, $query);

	if (!$resultado){
		die("Não deu certo a inclusão" . mysqli_error());
	}else{
		echo "Dados cadastrados";
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
	<form action="login.php" method="post" class="form-group">
		<div class="form-group">
			<label for="username">Usuario</label>
				<input type="text" name="username" id="username" placeholder="Nome de usuario" class="form-control">
		</div>
		<div class="form-group">
			<label for="password">Senha</label>
				<input type="password" name="password" id="password" placeholder="Senha" class="form-control">
		</div>
		<input type="submit" name="enviar" class="btn btn-primary" value="enviar">
		<a href="login_update.php"><button class="btn btn-primary">Atualizar dados</button>
	</form>


 	</div>
</body>
</html>