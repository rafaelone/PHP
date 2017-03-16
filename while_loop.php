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
 	
 /*
	$contador = 0;
 	while ( $contador < 10) {
 		echo "Ohayo" . "<br>"; 
 		$contador = $contador +1;
 		}
 */

 		$contador = 0;

 		while ($contador < 10) {
 			echo $contador . "<br>";
 			$contador++;
 		}
 	?>
 	</div>
</body>
</html>