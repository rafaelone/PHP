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
 		function converter ($c){
 			return ($c*1.8)+32;

 		}

 		echo "Conversão para Fº é ". converter(10);
 	?>
 	</div>
</body>
</html>