<?php include "pokemonDb.php" ?>
<?php include 'functionsPokemon.php'; ?>

<?php
if (isset($_POST['update'])){
		atualizaPokemon();
	}

?>
<div class="container">
	<div class="col-sm-6">
	<?php include "includes/header.php" ?>
		<h1>Atualizar pokemons</h1>
			<form action="pokemonUpdate.php" method="post">
				<div class="form-group">
					<label for="name">Nome</label>
						<input type="text" name="name" id="name" placeholder="Nome do pokemon" class="form-control">
				</div>
				<div class="form-group">
					<label for="type">Tipo</label>
						<input type="text" name="type" id="type" placeholder="Tipo do pokemon" class="form-control">
				</div>
					<div class="form-group">
					<label for="hp">HP</label>
						<input type="text" name="hp" id="hp" placeholder="hp do pokemon" class="form-control">
				</div>
				<div class="form-group">
					<select name="id">
						<?php mostrarPokemon()  ?>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" name="atualizar" value="Atualizar">
				</div>
			</form>
			<?php include "includes/botoesPokemon.php" ?>
			</div>

	

	<?php include "includes/footer.php" ?>