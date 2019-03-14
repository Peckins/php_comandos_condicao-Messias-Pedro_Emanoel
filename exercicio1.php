<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<form action="exercicio1.php" method="POST">
	<div class="form-gorup">
	<input type="number" name="valor1" placeholder="Valor para calcular" required><br>
	</div>
</form>

<?PHP
	$numero = $_POST['valor1'];
	
	if ($numero < 10){
		echo 'o número digitado é menor que 10';
	}
	else if($numero > 10){
		echo 'o número digato é maior que 10';
	}




?>