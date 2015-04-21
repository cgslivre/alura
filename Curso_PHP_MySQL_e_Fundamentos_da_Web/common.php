<?php
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

function showDbError($error){
	exit($error);
}
// Conexão com o banco de dados
function getDbConnection(){
	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE) or die(showDbError(mysqli_connect_error()));
	return $connection;
}

// Executa e retorna o resultado de uma instrução SQL
function dbQuery($sql = null){
	$connection = getDbConnection();
	$query = mysqli_query($connection, $sql) or die(showDbError(mysqli_error($connection)));
	return $query;
}

function pr($mixed){
	echo '<pre>'.print_r($mixed, true).'</pre>';
}
