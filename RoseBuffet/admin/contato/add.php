<?php
	
	if(isset($_POST["mensagem"])){
		
		require_once("global.php");
	
		
		$nome = $_POST["nome"];
        $email = $_POST["email"];
        $fone = $_POST["fone"];
        $texto = $_POST["mensagem"];

		$conta = new contaClasse();
        $conta->nome = $nome;
        $conta->email = $email;
        $conta->fone = $fone;
		$conta->mensagem = $texto;
		
		$conta->inserir();
	}

	

?>


<h1>Contato</h1>

<form action="index.php?p=contato&d=add" method="post" class="form-admin">

	
	
	<input type="text" placeholder="Nome:" name="nome">
    <input type="email" placeholder="Email:" name="email">
    <input type="tel" placeholder="Telefone:" name="fone">
    <textarea rows="20" cols="20" name="mensagem" placeholder="Digite sua mensagem"></textarea>
	
	<input type="submit" value="ENVIAR">

</form>



