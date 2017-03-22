<!CODYTYPE html>

<html lang = "pt">
<head>
	<meta charset = "utf-8">
		<title> Aula PHP</title>

</head>
<body>
 	<?php
 		if (4 == 5) {
 			echo "Sim é verdade";
 		}else{
 			echo "ERROOOOOOU :(";
 		}

 		echo "<br>";

 		if (4 >= 4) {
 			echo "Sim é verdade";
 		}
 		echo "<br>";

 		if (4 != 3 ) {
 			echo "Acertou";
 		}
 		echo "<br>";
 		if (4 === "4") {
 			echo "Sim é verdade";
 		}else{
 			echo "Deu merda";
 		}

 		echo "<br>";
 		if (4 == 7 && 4<5){
 			echo "Acertou";
 		}else{
 			echo "Acerta essa porra";
 		}

 		echo "<br>";

 		if (4 == 7 || 4<5) {
 			echo "Acertou cara o/";
 		}else{
 			echo "erroooou";
 		}
 	?>
</body>
</html>