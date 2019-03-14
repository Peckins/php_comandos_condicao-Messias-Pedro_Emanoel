<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<form action="exercicio4.php" method="POST">
	
	<input type="number" name="valor1" placeholder="Valor para calcular" required><br>
	<input type="number" name="valor2" placeholder="Valor para calcular" required><br>
	<input type="number" name="valor3" placeholder="Valor para calcular" required><br>
	<input type="number" name="valor4" placeholder="Valor para calcular" required><br>

</form>

<?PHP
	$d = $_POST['valor4'];
	$c = $_POST['valor3'];
	$b = $_POST['valor2'];
	$a = $_POST['valor1'];
	$soma = $a + $c;
	$multi = $b * $d;
	
	if($soma > $multi){
		echo 'O resultado da soma é maior que o da multiplicação';
	}
	else if ($multi > $soma){
		echo 'O resultado da soma é menor que o da multiplicação';
	}
	else if ($soma == $multi){
		echo 'O resultado da soma é igual ao da multiplicação'; 
	}
	





?>