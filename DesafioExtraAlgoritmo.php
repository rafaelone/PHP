

<?php 
	


	if(isset($_POST['analisar'])){

	$eleitores = $_POST['eleitores'];
	$branco = $_POST['branco'];
	$nulos = $_POST['nulos'];	
	$validos = $_POST['validos'];
		analisarDados($eleitores, $branco, $nulos, $validos);
	}




	function analisarDados($eleitores, $branco, $nulos, $validos){

		$totalBranco = ($branco*100)/$eleitores;
		$totalNulos = ($nulos*100)/$eleitores;
		$TotalValidos = ($validos*100)/$eleitores;

		$array = [$totalBranco, $totalNulos, $TotalValidos];

		return $array;

}



	$votos = analisarDados($eleitores, $branco, $nulos, $validos);
	foreach ($votos as $voto) {
		echo "$voto  % <br>";
	}

?>

<div class="container">
	<div class="col-sm-6">
	<?php include "includes/header.php" ?>
		<h1 class="center">Eleiçoes</h1>
			<form action="DesafioExtraAlgoritmo.php" method="post">
				<div class="form-group">
					<label for="name">Total de Eleitores</label>
						<input type="text" name="eleitores" id="eleitores" placeholder="Quantidade de eleitores" class="form-control">
				</div>
				<div class="form-group">
					<label for="branco">Brancos</label>
						<input type="text" name="branco" id="branco" placeholder="Brancos" class="form-control">
				</div>
				<div class="form-group">
					<label for="nulos">Nulos</label>
						<input type="text" name="nulos" id="nulos" placeholder="Nulos" class="form-control">
				</div>
				<div class="form-group">
					<label for="validos">Validos</label>
						<input type="text" name="validos" id="validos" placeholder="validos" class="form-control">
				</div>
				<div class="form-group">
						<input type="submit" name="analisar" value="Analisar" class="btn btn-success">
				</div>
			</form>	
	</div>

