<?php include "pokemonDb.php";?>

<?php
function cadastraPokemon(){
	global $connection;

	$name = $_POST['name'];
	$typo = $_POST['type'];
	$hp = $_POST['hp'];

	$query = "INSERT INTO pokemon (name, type, hp) VALUES ('$name', 'type', 'hp')";
	$resultado = mysqli_query($connection, $query);
	if (!$resultado){
		die("Não deu certo a inclusão" . mysqli_error());
	}else{
		echo "Dados cadastrados";
	}

}
/*
function lePokemon(){
	global $connection;
	$query = "SELECT * from pokemons where type = 'fogo'";
	$resultado = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($resultado)){
		echo "<pre>";
		print_r($row);
		echo "</pre>";
}

function mostrarPokemon (){
	global $connection;
	query = "SELECT * from pokemons";
	$resultado = mysqli_query($connection, $query);

	while ($row = mysqli_fetch_assoc($resultado)) {
					$id = $row['id'];
					echo "<option value='$id'>$id</option>";
				}
}

function atualizaPokemon(){
	global $connection;

$name = $_POST['name'];
	$type = $_POST['type'];
	$hp = $_POST['hp'];
	$id = $_POST['id'];

	$query = "update usuarios set ";
	$query .= "name = '$name', ";
	$query .= "type = '$type' ";
	$query .= "hp = '$hp' ";
	$query .= "where id = $id";
		
 $resultado = mysqli_query($connection, $query);
 	if (!$resultado) {
 		die("Falhou na hora de atualizar");
 	}else{
 		echo "Dados atualizados com sucesso";
 		}
	}


function deletarPokemon()
global $connection;

$name = $_POST['name'];
	$type = $_POST['type'];
	$hp = $_POST['hp'];
	$id = $_POST['id'];

$query = "delete from pokemons ";
	$query .= "where id = $id ";

		
 $resultado = mysqli_query($connection, $query);
 	if (!$resultado) {
 		die("Falhou na hora de deletar");
 	}else{
 		echo "Dados removidos com sucesso";
 		}
*/
?>