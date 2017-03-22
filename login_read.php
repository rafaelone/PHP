<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<?php 
include "includes/header.php";
?>
<div class="container">
	<div class="col-sm-6">
	<h1 class="text-center">Read</h1>
		<?php 
		
			leDados();
			
		?>
	
<?php include "includes/buttons.php" ?>
 	</div>
 	
<?php include "includes/footer.php"?>