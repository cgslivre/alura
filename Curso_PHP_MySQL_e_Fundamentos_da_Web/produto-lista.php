<?php
include_once('common.php');
include_once('cabecalho.php');
include_once('banco-produto.php');
?>

	<h1>Produtos cadastrados</h1>

	<hr />

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Preço</th>
				<th>:::</th>
			</tr>
		</thead>
		<tbody>
		<?php 
		$listaProdutos = listaProdutos();
		foreach ($listaProdutos as $produto): 
		?>
			<tr>
				<td><?php echo $produto->id; ?></td>
				<td><?php echo $produto->nome; ?></td>
				<td><?php echo $produto->preco; ?></td>
				<td>
					<a href="editar-produto.php?id=<?php echo $produto->id; ?>" class="btn btn-prymary">editar</a>
					<a href="remove-produto.php?id=<?php echo $produto->id; ?>" class="btn btn-danger">excluir</a>
				</td>
			</tr>
		<?php 
		endforeach; 
		?>
		</tbody>
	</table>
	
<?php
include_once('rodape.php');
?>
