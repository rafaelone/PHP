<?php include "pokemonDb.php" ?>
<?php include "functionsPokemon.php" ?>

<?php 
include "includes/header.php";
?>
<div class="container">
	<div class="col-sm-6">
	<h1 class="text-center">Read</h1>
		<?php 
		
			lePokemon();
			
		?>
	
<?php include "includes/buttons.php" ?>
 	</div>
 	
<?php include "includes/footer.php"?>