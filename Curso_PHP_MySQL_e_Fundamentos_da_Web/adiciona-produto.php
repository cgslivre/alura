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
	$msg = 'Erro ao processar operação!';
}else{
	$msg = 'Produto '.$nome.', com valor unitário de R$ '.$preco.' foi inserido com sucesso!';
}

include_once('cabecalho.php');
?>

<div class="alert alert-<?php echo ($success)?'success':'danger'?>"><?php echo $msg; ?></div>

<?php 
include_once('rodape.php');
?>
