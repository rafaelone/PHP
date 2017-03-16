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
 		$lista = [343, 54, 232, 757, 21];
 		echo max($lista); // retorna o maior numero do array
 		echo "<br>";
 		echo min($lista); // retorna o menor numero do array
 		echo "<br>";
 		//ordem crescente
 		echo sort($lista);
 		//Impressao do meu arra inteiro
 		print_r($lista);
 		echo "<br>";

 		$array = array('Rafael', 'Sergio' ,'95355-5976');
 		$implode = implode(", ", $array);
 		echo $implode;
 	?>
 	</div>
</body>
</html>