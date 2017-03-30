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

 	function digaAlgo(){
 		echo "Ohayo";
 	}


 	function calcula(){
 		echo 457 + 122;
 	}

 	echo "<br>";
 	function init(){
 		digaAlgo();
 		echo "<br>";
 		calcula();
 	}

 	init();

 	?>
 	</div>
</body>
</html>