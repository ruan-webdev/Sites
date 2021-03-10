	<?php 
		
require_once("global.php");
		$id = $_GET['id'];
		$depo =  new DepoClasse($id);
		$depo->deletar();
	
?>