<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<?php

	if (isset($_POST['update'])){
		atualizaTabela();
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
	<form action="login_update.php" method="post" class="form-group">
		<div class="form-group">
			<label for="username">Usuario</label>
				<input type="text" name="username" id="username" placeholder="Nome de usuario" class="form-control">
		</div>
		<div class="form-group">
			<label for="password">Senha</label>
				<input type="password" name="password" id="password" placeholder="Senha" class="form-control">
		</div>

	<div class="form-group">
			<select name="id">
				<!--<OPTION value"">1</OPTION>-->
				<?php
				mostraDados();
				?>
			</select>
		</div>

		<input type="submit" name="update" class="btn btn-primary" value="Atualizar">
		<a href="login.php"><button class="btn btn-primary">Cadastro</button></a>
	</form>


 	</div>
</body>
</html>