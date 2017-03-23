<?php include "pokemonDb.php" ?>
<?php include "functionsPokemon"?>

<?php 
include "includes/header.php";
?>

<div class="container">
	<div class="col-sm-6">
		<h1 class="center">Pokemons do tipo fogo</h1>
		<?php
			lePokemon();

		?>
	<?php include "includes/buttons.php" ?>
 	</div>
 	
<?php include "includes/footer.php"?>