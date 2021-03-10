<?php

	$conta = @$_GET['d'];

	if($conta == NULL){
		require_once("contato/list.php");
	}else{
		if($conta == "add"){require_once("contato/add.php");}
		if($conta == "list"){require_once("contato/list.php");}
         if($conta == "editar"){require_once("contato/editar.php");}
		if($conta == "excluir"){require_once("contato/excluir.php");}
	}


?>