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

	//arrays

		$listaNumeros = array(17,232, 248, 2, 42);
		echo $listaNumeros [1];
		echo "<br>";
		print_r($listaNumeros);

		echo "<br>";

		$nomes = array("Rafael", "Batuta", "Ola");
		print_r($nomes);

	//arrays associativos
echo "<br>";
		$nomes2 = array("primeiro_nome" => 'Rafael', "segundo_nome" => 'Draven', "terceiro_nome" => 'Ola');
		echo $nomes2['segundo_nome'];

	?>
	</div>
</body>
</html>