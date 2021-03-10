<?php

	$usuario = @$_GET['d'];

	if($usuario == NULL){
		require_once("usuario/list.php");
	}else{
		if($usuario == "add"){require_once("usuario/add.php");}
		if($usuario == "list"){require_once("usuario/list.php");}
        if($usuario == "editar"){require_once("usuario/editar.php");}
		if($usuario == "excluir"){require_once("usuario/excluir.php");}
	}


?>