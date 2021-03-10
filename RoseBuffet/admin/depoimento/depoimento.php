<?php

	$depo = @$_GET['d'];

	if($depo == NULL){
		require_once("depoimento/list.php");
	}else{
		if($depo == "add"){require_once("depoimento/add.php");}
		if($depo == "list"){require_once("depoimento/list.php");}
        if($depo == "editar"){require_once("depoimento/editar.php");}
		if($depo == "excluir"){require_once("depoimento/excluir.php");}
	}


?>