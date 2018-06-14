<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Clinica Odontologica WEB</title>

	<link rel="stylesheet" href="<?php echo asset('css/estilo.css')?>"  type="text/css">
	
</head>
<body>

	<center>
		<header>
			<h1>Clinica Odontologica </h1>
		</header>
	</center>



	<div class="container">
		<nav>
			<ul class="menu">
				<a href="cesmac.edu.br"><li>Clareamento</li></a>
				<a href="cesmac.edu.br"><li>Consultas</li></a>
				<a href="cesmac.edu.br"><li>Próteses</li></a>
				<a href="cesmac.edu.br"><li>Ortodontia</li></a>
				<a href="cesmac.edu.br"><li>Implantes</li></a>
				<a href="cesmac.edu.br"><li>Outros Procedimentos</li></a>
			</ul>

		</nav>
		<section>
			<h1>Cadastrar Novo Paciente</h1>
			<hr><br><br></hr>

			<form method="post" action="processa.php">
				<input type="submit" value="Salvar" class="bnt">
				<input type="reset" value="Limpar" class="bnt">
				<br><br>

				Nome<br>
				<input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
				Email<br>
				<input type="email" name="email" class="campo" maxlength="50" required><br>

				<div class ="footer">O seu sorriso e o nosso objetivo!!!</div>

			</form>
		</section>
	</div>

</body>
</html>