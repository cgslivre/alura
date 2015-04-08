<?php
include_once('cabecalho.php');
?>

  <h1>Cadastro de produto</h1>
	<form action="adiciona_produto.php" method="post">

		<label for="nome">Nome do produto:</label>
		<input type="text" name="nome" value="" />

		<label for="preco">Preço do produto:</label>
		<input type="text" name="preco" value="" />	

		<br />
		<input type="submit" value="Salvar" />

	</form>
	
<?php
include_once('rodape.php');
?>
