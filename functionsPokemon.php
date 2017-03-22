<?php include "db.php";?>

<?php
function cadastraPokemon(){
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

?>