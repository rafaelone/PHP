<?php include "pokemonDb.php" ?>
<?php include "includes/header.php" ?>

<div class="container">
	<div class="col-sm-6">
	<h1 class="text-center">Delete</h1>
	

<form action="pokemonDelete.php" method="post" class="form-group">
		<div class="form-group">
			<label for="name">Nome</label>
				<input type="text" name="name" id="name" placeholder="Nome do pokemon" class="form-control">
		</div>
		<div class="form-group">
			<label for="type">Tipo</label>
				<input type="text" name="type" id="type" placeholder="Tipo " class="form-control">
		</div>

	<div class="form-group">
			<select name="id">
				<!--<OPTION value"">1</OPTION>-->
				<?php
				mostraDados();
				?>
			</select>
		</div>
		<input type="submit" name="enviar" class="btn btn-primary" value="enviar">
	</form>
	<?php include "includes/botoesPokemon.php" ?>
	</div>

	<?php include "includes/footer.php" ?>
