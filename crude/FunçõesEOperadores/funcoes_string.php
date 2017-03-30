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
 	$string = "Faltam 10 dias para o carnaval";
 	$string2 = "rafael";
 	// a função abaixo conta a quantidade de caracteres da nossa string
 	echo strlen($string);
 	echo "<br>";
	//converte tudo para maisculo
 	echo strtoupper($string);
 	echo "<br>";
 	//converte para minusculo
 	echo strtolower($string)
 	?>
 	</div>
</body>
</html>