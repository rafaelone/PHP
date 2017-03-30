

<?php 
	if(isset($_GET['calcular'])){
		calcularNota();
	}

function calcularNota(){
	$nome = $_GET['nome'];
	$nac1 = $_GET['nac1'];
	$nac2 = $_GET['nac2'];

	$calcular = ($nac1+$nac2)/2;
	echo "<div class='alert alert-success'>Voce $nome teve media $calcular</div>";
}

?>




<div class="container">
	<div class="col-sm-6">
		<form action="Desafio10.php" method="get">
			<div class="form-group">
				<label for="nome" >Nome</label>
					<input type="text" name="nome" class="form-control" id="nome" placeholder="Seu nome">
			</div>
			<div class="form-group">
				<label for="nac1">Nac1</label>
					<input type="text" name="nac1" class="form-control" id="nac1" placeholder="Nac 1">
			</div>
			<div class="form-group">
				<label for="nac2" >Nac2</label>
					<input type="text" name="nac2" class="form-control" id="nac2" placeholder="Nac 2">
			</div>
			<input type="submit" name="calcular" value="Calcular Media" class="btn btn-primary">
		</form>

	<?php include "includes/header.php" ?>

	</div>
