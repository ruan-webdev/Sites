<?php
			
require_once("global.php");
	$id = $_GET['id'];
	$banner = new BannerClasse($id);
	$banner->deletar();