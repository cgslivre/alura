<?php
include_once('cabecalho.php');
?>

	<h1>Cadastro de produto</h1>

	<hr />

	<form class="form" action="adiciona-produto.php" method="post">

		<div class="form-group">
			<label for="nome">Nome do produto:</label>
			<input type="text" name="nome" value="" class="form-control" />	
		</div>

		<div class="form-group">
			<label for="preco">Preço do produto:</label>
			<input type="text" name="preco" value="" class="form-control" />	
		</div>

		<button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>

	</form>
	
<?php
include_once('rodape.php');
?>
