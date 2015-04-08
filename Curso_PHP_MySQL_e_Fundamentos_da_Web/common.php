<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_BASE', 'alura_php');

// Conexão com o banco de dados
function getDbConnection(){
	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE);
	return $connection;
}

// Selecao de dados
function dbSelect($tableName = null, $columns = '*', $conditions = array(), $limit = null){

}

// Inserção de dados
function dbInsert($tableName = null, $arrayFieldValue = array){
	
}

// Atualização de dados
function dbUpdate(){

}

// Deleção de dados
function dbDelete(){

}

function dbQuery($sql = null){
	return mysqli_query(getDbConnection(), $sql);
}
// Insere Produto
function insereProduto($nome, $preco) {
	$sql = "insert into produtos (nome, preco) values ('{$nome}', ${preco})";
  $result = dbQuery($sql);
  return $result;
}


?>
