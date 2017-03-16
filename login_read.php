<?php

	$connection = mysqli_connect('localhost', 'root', 'fiap', 'loginapp');
	
	if (!$connection){
		die("vish deu ruim");
	}


	$query = "SELECT * FROM usuarios";
	$resultado = mysqli_query($connection, $query);



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
		<?php 
		while ($row = mysqli_fetch_assoc($resultado)){
		
		?>
		<pre>
		<?php
		print_r($row);
}
		?>


 	</div>
</body>
</html>