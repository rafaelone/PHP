<?php include "pokemonDb.php" ?>
<?php include "functionsPokemon.php" ?>

<?php 
	if(isset($_POST['cadastrar'])){
		cadastraPokemon();
	}

?>

<div class="container">
	<div class="col-sm-6">
	<?php include "includes/header.php" ?>
		<h1 class="center">Create Pokemons</h1>
			<form action="pokemonCreate.php" method="post">
				<div class="form-group">
					<label for="name">nome</label>
						<input type="text" name="name" id="name" placeholder="Nome do pokemon" class="form-control">
				</div>
				<div class="form-group">
					<label for="type">Tipo</label>
						<input type="text" name="type" id="type" placeholder="Tipo do pokemon" class="form-control">
				</div>
				<div class="form-group">
					<label for="hp">HP</label>
						<input type="text" name="hp" id="hp" placeholder="Nome do pokemon" class="form-control">
				</div>
				<div class="form-group">
						<input type="submit" name="cadastrar" value="cadastrar">
				</div>
			</form>
<?php include "includes/botoesPokemon.php" ?>	
	</div>

	<?php include "includes/footer.php" ?>