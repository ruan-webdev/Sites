<?php
		
require_once("global.php");
	$id = $_GET['id'];
	$usuario = new usuarioClasse($id);
	$usuario->deletar();