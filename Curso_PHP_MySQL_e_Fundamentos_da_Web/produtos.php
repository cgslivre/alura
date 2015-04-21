<?php 

$action = isset($_GET['action']) ? $_GET['action'] : 'listar';

// É uma submissão de formulário então processa a ação
if(isset($_POST['nome'])){

	if(isset($_GET['id'])){
		produtoAtualizar($_POST);
	}else{
		produtoInserir($_POST);
	}

}else{

}
