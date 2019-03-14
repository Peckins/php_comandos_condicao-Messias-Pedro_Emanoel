<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<form action="exercicio1.php" method="POST">
	
	<input type="number" name="valor1" placeholder="Valor para calcular" required><br>
	<input type="number" name="valor2" placeholder="Valor para calcular" required><br>
	<input type="number" name="valor3" placeholder="Valor para calcular" required><br>
	<input type="number" name="valor4" placeholder="Valor para calcular" required><br>
	
</form>

<?PHP
	$n1 = $_POST['valor1'];
	$n2 = $_POST['valor2'];
	$n3 = $_POST['valor3'];
	$n4 = $_POST['valor4'];
	$nota = $n1 + $n2 + $n3 + $n4 / 4;
	
	if($nota > 7){
		echo 'Você foi reprovado';
	}
	else {
		echo 'você foi aprovado'; 
	}


?>