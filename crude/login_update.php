<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<?php

	if (isset($_POST['update'])){
		atualizaTabela();
	}

?>

<?php 	include "includes/header.php" ?>
<div class="container">
	<div class="col-sm-6">
	<h1 class="text-center">Update</h1>
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
	</form>
	<?php include "includes/buttons.php" ?>

 	</div>
<?php 	include "includes/footer.php" ?>