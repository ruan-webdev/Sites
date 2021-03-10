<?php

require_once("global.php");

class Erro{
	
	public static function carregarErro(Exception $e){
		if(DEBUG){
			echo '<pre>';
			print_r($e);
			echo '</pre>';
		
	
	
}else{
	echo $e->getMessage();
}

exit();

	}
}