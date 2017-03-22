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
 		$numeros = array(1, 2, 3, 4, 5 );
 		foreach ($numeros as $numero) {
 			echo $numero . "<br>";
 		}
 	?>
 	</div>
</body>
</html>