<?php 

$nome = "NomeDoCookie";
$valor = 100;
$expira = time() + (60*60*24*7);
setcookie($nome, $valor, $expira);

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php/*
if (isset($_COOKIE["NomeDoCookie"])){
	$nomeCookie = $_COOKIE["NomeDoCookie"];
	echo " $nomeCookie";
}else{
	$nomeCookie = "";
}*/
/*
if(isset($_COOKIE['cookie_teste'])){
	echo "Voce ja passou aqui! este cookie existe";
}else{
	echo "Voce nunca passou aqui";
	setcookie('cookie_teste','algum valor..', time() + 3600);
}
}
*/
?>

</body>
</html>