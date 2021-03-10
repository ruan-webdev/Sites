<?php

	$destaque = @$_GET['d'];

	if($destaque == NULL){
		require_once("destaque/list.php");
	}else{
		if($destaque == "add"){require_once("destaque/add.php");}
		if($destaque == "list"){require_once("destaque/list.php");}
        if($destaque == "editar"){require_once("destaque/editar.php");}
        if($destaque == "excluir"){require_once("destaque/excluir.php");}

	}


?>