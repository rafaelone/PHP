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
 		$numero = 50;

 		switch ($numero) {
 			case 4:
 				echo "Esse é o numero 4";
 				break;
 			case 27:
 				echo "Esse é o numero 27"	;
 				break;
 			case 38:
 				echo "Esse é o  numero 38";
 				break;

 				default:
 				echo "não encontrei nenhum numero";
 				break;
 		}
 	?>
 	</div>
</body>
</html>