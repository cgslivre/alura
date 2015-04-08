<?php
// Incluindo o arquivo de funções
include_once('common.php');

// Pegando dados
$nome = $_POST['nome'];
$preco = $_POST['preco'];

// Inserindo produto no banco de dados
$success = insereProduto($nome, $preco);

// Em caso de erro..
if(!$success){
	echo 'Erro ao processar operação!';
}else{
	echo 'Produto '.$nome.', com valor unitário de R$ '.$preco.' foi inserido com sucesso!';
}
?>
