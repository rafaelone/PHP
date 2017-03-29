<?php

print_r($_GET);

?>

<div class="container">
	<div class="col-sm-6">
	<?php include "includes/header.php" ?>

	<?php 
	$id = 457;
	$button = "Clique aqui agora"
	?>
	<a href="get.php?id=<?php echo $id; ?>"><?php echo $button ?></a>
	</div>

