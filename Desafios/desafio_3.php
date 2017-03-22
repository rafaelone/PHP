<!CODYTYPE html>

<html lang = "pt">
<head>
	<meta charset = "utf-8">
		<title> Aula PHP</title>

</head>
<body>
 	<?php
 	
 	$nac = 0.2;
 	$nacProva = 7;
 	$am = 0.3;
 	$amProva = 8.7;
 	$ps = 0.5;
 	$psProva = 6.2;
	$aula = 70;
	$qtd_faltas = 13;

	$totalFaltas = $aula*0.20;

 	$total = ($nac * $nacProva) + ($am * $amProva) + ($ps * $psProva);
 	if ($total >= 6 && $qtd_faltas <= $totalFaltas ){
 		echo "Passou de ano com nota: " ,$total ;
 	}else if ($total  >= 6 && $qtd_faltas > $totalFaltas){
 		echo "Sua nota foi ", $total, " mas você foi reprovado por faltas";
 	}
 	else{
 		echo "Não passou";
 	}


 	


 	?>
</body>
</html>