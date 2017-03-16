<!CODYTYPE html>

<html lang = "pt">
<head>
	<meta charset = "utf-8">
		<title> Aula PHP</title>
<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
 	<?php

 		function somar ($x , $y){
 			return $x +$y;
 		}
 		function subtrair ($x , $y){
 			return $x - $y;
 		}

function multiplicar ($x , $y){
 			return $x * $y;
 		}

function dividir ($x , $y){
 			return $x / $y;
 		}


 		echo somar(10, 2);
 		echo "<br>";
 		echo subtrair(10, 2);
 		echo "<br>";
 		echo multiplicar(10, 2);
 		echo "<br>";
 		echo dividir(10, 2);
 	?>
 	</div>
</body>
</html>