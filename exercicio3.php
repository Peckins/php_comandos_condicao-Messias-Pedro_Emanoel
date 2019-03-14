<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<form action="exercicio3.php" method="POST">
	
	<input type="number" name="valor1" placeholder="Valor para calcular" required><br>
	</div>
</form>

<?PHP
	$numero = $_POST['valor1'];
	
	if($numero < 0)
	{
		echo 'O número digitado é negativo'; 
	}
	else if($numero > 0)
	{
		echo 'O número digitado é positivo'; 
	}
	else if($numero == 0)
	{
		echo 'O número digitado é igual a 0';
	}



?>