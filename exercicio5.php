<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<form action="exercicio1.php" method="POST">
	
	<input type="number" name="valor1" placeholder="Valor para calcular" required><br>
	<input type="number" name="valor2" placeholder="Valor para calcular" required><br>
	
</form>

<?PHP
	$a = $_POST['valor1'];
	$b = $_POST['valor2'];
	
	if($a > $b){
		echo 'O valor de A é: '.$a.'O valor de B é '.$b;
	}
	if($b > $a){
		echo 'O valor de b é: '.$a.'O valor de a é '.$a;
	}


?>