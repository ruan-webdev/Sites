<?php

	$eventos = @$_GET['d'];

	if($eventos == NULL){
		require_once("eventos/list.php");
	}else{
		if($eventos == "add"){require_once("eventos/add.php");}
		if($eventos == "list"){require_once("eventos/list.php");}
		if($eventos == "editar"){require_once("eventos/editar.php");}
		if($eventos == "excluir"){require_once("eventos/excluir.php");}
	}


?>