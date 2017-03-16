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
 	
 	$x = "fora";

 	function teste(){
 		global $x; // variavel lobal 
 	$x = "dentro";

 	}
 	echo $x;
 	echo "<br>";
 	teste();
 	echo $x;
 	?>		

 	
 	</div>
</body>
</html>