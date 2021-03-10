<?php
require_once("global.php");
	$id = $_GET['id'];
	$evento = new eventoClasse($id);
	$evento->deletar();