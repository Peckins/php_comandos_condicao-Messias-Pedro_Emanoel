<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--navbar-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.html"><img src="img/php.png" class="img-fluid"></a>

		<!--Botão responsivo do menu navbar-->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavbar">
			<span class="navbar-toggle-icon"></span>
		</button>

		<!--Menu navbar-->
		<div class="collapse navbar-collapse" id="menuNavbar">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
				</li>

				<!--Menu Dropdown-->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Menu
					</a>
					
					<div class="dropdown-menu" aria-labelledby="navDrop">
						<a class="dropdown-item" href="exercicio1.html">Exercício 1</a>
						<a class="dropdown-item" href="exercicio2.html">Exercício 2</a>
						<a class="dropdown-item" href="exercicio3.html">Exercício 3</a>
						<a class="dropdown-item" href="exercicio4.html">Exercício 4</a>
						<a class="dropdown-item" href="exercicio5.html">Exercício 5</a>
						<a class="dropdown-item" href="exercicio6.html">Exercício 6</a>
						<a class="dropdown-item" href="exercicio7.html">Exercício 7</a>
						<a class="dropdown-item" href="exercicio8.html">Exercício 8</a>
					</div>
				</li>
				<!--Fim menu dropdown-->

			</ul>

			<!--Barra de pesquisa-->
			<form action="pesquisa.php" method="POST" class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" name="pesquisa" placeholder="Pesquisar" aria-label="Pesquisar">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
			</form>
			<!--Fim da barra de pesquisa-->

		</div>
		<!--Fim menu navbar-->

	</nav>
	<!--Fim do navbar-->

	<div class="container-fluid mt-5">
		<div class="row">
				<div class="col-md-12">
					<div class="jumbotron">
						<?PHP
						
	                    $Sal     = $_POST ['Salario'];
	                    $reajus1 = ($Sal * 50) / 100;
	                    $reajus2 = ($Sal * 30) / 100;
	                    $Salrea1 = $reajus1 + $Sal;
	                    $Salrea2 = $reajus2 + $Sal;
	                   
	                    if($Sal <= 300 )
	                    {
	                        echo "<h3 class='text-center'>Seu salário foi reajustado em 50%: $Salrea1</h3>";
	                    }
	                    else if ($Sal >= 300)
	                    {
	                         echo "<h3 class='text-center'>Seu salário foi reajustado em 30%: $Salrea2</h3>";
	                    }
						?>
					</div>
				</div>				
		</div>
	</div>
