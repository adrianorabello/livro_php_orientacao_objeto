<?php 


	require_once "a1.php" ;
	require_once "b1.php" ;
	require_once "c1.php" ;

	//require "autoload_namespace.php";
	
	use Library\Widgets\Field;
	use Library\Widgets\Form;
	use Library\Container\Table;

	var_dump(new Field);
	var_dump(new Form);
	var_dump(new Table);

	$f = new Form;
	$f->show();


 ?>