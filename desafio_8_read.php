<?php
 	
 	$connection  = mysqli_connect('localhost', 'root', 'fiap', 'desafio');
		if (!$connection){
			die("deu ruim parça");
		}

 		$query = "select * from cadastro";
 		$resultado = mysqli_query($connection, $query);
 	?>



<!DOCTYPE html>

<html lang = "pt">
<head>
	<meta charset = "utf-8">
		<title> Aula PHP</title>
<link rel="stylesheet" type="text/css" href="../_css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="col-sm-6">
	    <?php
        while($row = mysqli_fetch_assoc($resultado)){
        ?>    
         
        <pre>       
        <?php        
            print_r($row); 
        }        
        ?> 
        </pre>  
	</div>

 </div>
 <div class="container">
 <button class="btn btn-default"><a href="desafio_8.php">Voltar</button>
 </div>
</body>
</html>