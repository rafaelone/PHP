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


function sortear(){
	$numeros = array();
	while (count($numeros) <6 ) {
		$valor = rand(1, 60);
		$numeros[$valor] = $valor;
	}

	sort($numeros);
	$numeros = implode(" - ", $numeros);

	echo "Os numeros sorteados da Mega sena são: ";
	echo "<br>";
	print_r($numeros);


}
echo sortear();

 	?>
 	</div>
</body>
</html>