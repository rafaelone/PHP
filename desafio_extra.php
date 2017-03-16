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
 		function conversaoDolar($dolar, $cotacao, $frete){
 				return ($dolar * $cotacao) + $frete;

 		}
 		echo "Robson terar um valor de: R$" .conversaoDolar(8750 , 3.08 , 17.00);


 	?>
 	</div>
</body>
</html>

