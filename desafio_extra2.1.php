<!DOCTYPE html>

<html lang = "pt">
<head>
	<meta charset = "utf-8">
		<title> Aula PHP</title>
<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
 	<?php


 	function calcular ($x){
 		$milha = 1.60934;
 		return $x * $milha;
 	}
 	echo " o casal andou ". number_format(calcular(124,2)). " km";

 	?>
 	</div>
</body>
</html>