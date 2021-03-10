<?php
		
require_once("global.php");
	$id = $_GET['id'];
	$conta = new contatoClasse($id);
	$conta->deletar();