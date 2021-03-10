<?php
		
require_once("global.php");
	$id = $_GET['id'];
	$destaque = new DestaClasse($id);
	$destaque->deletar();