<!DOCTYPE html>
<html lang = "pt">
	<head>
		<meta charset = "utf-8">
		<title> Aula PHP</title>
		<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	</head>
	<body>
		<div>
			<form action="desafio_extra2.php" method="post">
				<input type="text" placeholder="imposto" name="imposto">
				<br>
				<input type="submit" value="enviar" name="enviar">
			</form>
			<?php
				if (isset($_POST['enviar'])){
					//coletando informações
				$imposto =	$_POST['imposto'];
				if ($imposto <= 1200){
						echo "Imposto isento ";
						echo $imposto;
					}else{
						if ($imposto >= 1201 && $imposto<= 5000) {
							echo "imposto de 10%";
							//echo $imposto + $imposto * 0.1;
							echo $imposto *0.1 ;
						}else{
							if ($imposto >= 5001 && $imposto<= 10000) {
							echo "imposto de 15% ";
							//echo  $imposto + ($imposto * 0.15);
							echo $imposto * 0.15;
							}else{
								echo "imposto de 20%";
								//echo  $imposto + ($imposto * 0.2);
								echo $imposto * 0.2;
								}
							}
						}
					}
				
				
				
				?>
		</div>
	</body>
</html>