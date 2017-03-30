
<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>
<?php
if (isset($_POST['enviar'])){
		insereDados();


}
?>
<?php
	include "includes/header.php";
  ?>

<div class="container">
	<div class="col-sm-6">
	<h1 class="text-center">Create</h1>
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
		
	</form>
	<?php include "includes/buttons.php" ?>


<?php include "includes/footer.php" ?>