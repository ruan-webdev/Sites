<?php

	$banner = @$_GET['d'];

	if($banner == NULL){
		require_once("banner/list.php");
	}else{
		if($banner == "add"){require_once("banner/add.php");}
		if($banner == "list"){require_once("banner/list.php");}
		if($banner == "editar"){require_once("banner/editar.php");}
		if($banner == "excluir"){require_once("banner/excluir.php");}
	}


?>