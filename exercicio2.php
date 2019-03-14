<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<form action="exercicio2.php" method="POST">
	<div class="form-gorup">
	<input type="number" name="v1" placeholder="Valor para calcular" required><br>
	</div>
</form>

<?PHP
	$numero = $_POST['v1'];
	
	if ($numero == 10){
		echo 'o número digitado é igual a  10';
	}
	else{
		echo  'o número digitado não é igual a 10';
	}




?>