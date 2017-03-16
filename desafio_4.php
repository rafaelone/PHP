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

 for ($e=1; $e <=10 ; $e++) { 

 	echo "Tabuado do " . $e ."<br>";
	
 	for ($i=1; $i <=10  ; $i++) { 
 	
 	 	echo $e ." X " . $i . "=" . $e*$i . "<br>";
 	 } 
 	 echo "<br>";
 	}

 	?>
 	</div>
</body>
</html>