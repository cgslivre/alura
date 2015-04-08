<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Secao de definições
// Servidor
define('DB_HOST', 'localhost');
// Usuario
define('DB_USER', 'root');
// Senha
define('DB_PASS', '');
// Base de dados
define('DB_BASE', 'alura_php');

// Conexão com o banco de dados
function getDbConnection(){
	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE) or die(mysqli_errno());
	return $connection;
}

// Executa e retorna o resultado de uma instrução SQL
function dbQuery($sql = null){
	$query = mysqli_query(getDbConnection(), $sql);
	return $query;
}

// Insere Produto
function insereProduto($nome, $preco) {
	// Preparando a SQL
	$sql = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
  	$result = dbQuery($sql);
  	return $result;
}
?>
