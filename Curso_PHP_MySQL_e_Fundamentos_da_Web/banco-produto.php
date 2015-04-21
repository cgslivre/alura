<?php 

// Insere Produto
function insereProduto($nome, $preco) {
	// Preparando a SQL
	$sql = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
  	$result = dbQuery($sql);
  	return $result;
}

// Lista todos os produtos
function listaProdutos(){
	$listaProdutos = array();
	$query = dbQuery('select * from produtos');
	while ($produto = $query->fetch_object()){
		array_push($listaProdutos, $produto);
	}
	return $listaProdutos;
}