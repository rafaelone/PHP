<?php include "db.php";?>

<?php


function insereDados(){
	global $connection;


	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";
	$resultado = mysqli_query($connection, $query);

	if (!$resultado){
		die("Não deu certo a inclusão" . mysqli_error());
	}else{
		echo "Dados cadastrados";
	}

}

function leDados(){


	global $connection;
	$query = "SELECT * FROM usuarios";
	$resultado = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($resultado)){
		echo "<pre>";
		print_r($row);
		echo "</pre>";
	}
}


function mostraDados(){
	global $connection;
	$query = "select * from usuarios";
	$resultado = mysqli_query($connection, $query);

	while ($row = mysqli_fetch_assoc($resultado)) {
					$id = $row['id'];
					echo "<option value='$id'>$id</option>";
				}
}


function atualizaTabela(){
	global $connection;

$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "update usuarios set ";
	$query .= "username = '$username', ";
	$query .= "password = '$password' ";
	$query .= "where id = $id";
		
 $resultado = mysqli_query($connection, $query);
 	if (!$resultado) {
 		die("Falhou na hora de atualizar");
 	}else{
 		echo "Dados atualizados com sucesso";
 		}
	}

function deletarLinha(){

global $connection;

$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "delete from usuarios ";
	$query .= "where id = $id ";

		
 $resultado = mysqli_query($connection, $query);
 	if (!$resultado) {
 		die("Falhou na hora de deletar");
 	}else{
 		echo "Dados removidos com sucesso";
 		}
	}





?>
