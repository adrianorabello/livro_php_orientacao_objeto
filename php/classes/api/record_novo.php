<?php 
	
	require_once "autoload.php";

	try {

		Transaction::open('estoque');
		Transaction::setLogger(new LoggerTXT("../tmp/log_novo.txt"));
		Transaction::log('Inserindo um novo produto ');
		$p1 = new Produto;
		$p1->descricao = "Cerveja artezanal";
		$p1->estoque 		= 50;
		$p1->preco_custo 	= 8;
		$p1->preco_venda 	= 12;
		$p1->codigo_barras 	= 'aefwgwrgwrgwf';
		$p1->data_cadastro 	= date('Y-m-d');
		$p1->origem 		= 'N'; 
		echo "<pre>";
		print_r($p1);
		$p1->store();
		Transaction::close();
	} catch (Exception $e) {
		Transaction::rollback();
		print $e->getMessage();
	}
 ?>