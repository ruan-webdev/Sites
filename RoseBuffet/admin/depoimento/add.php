<?php
	
	if(isset($_POST["texto"])){
		
require_once("global.php");
	
		$texto = $_POST["texto"];
		$nome = $_POST["nome"];

		$depo = new DepoClasse();
		$depo->mensagem = $texto;
		$depo->nome = $nome;
		$depo->inserir();
	}

	

?>


<h1>Depoimento</h1>

<form action="index.php?p=depoimento&d=add" method="post" class="form-admin">

	<textarea rows="20" cols="20" name="texto" placeholder="Digite o depoimento"></textarea>
	
	<input type="text" placeholder="Nome:" name="nome">
	
	<input type="submit" value="ENVIAR">

</form>



