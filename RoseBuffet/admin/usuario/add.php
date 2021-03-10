<?php
	
	if(isset($_POST["nome"])){
		
			
require_once("global.php");
		
		$id = $_POST["id"];
        $nome = $_POST["nome"];
		$email = $_POST["email"];
		$senhaMD5 = md5($senha);
		
		$usuario = new usuarioClasse($id);
		$usuario->nome = $nome;
		$usuario->email = $email;
     	$usuario->senha = $senhaMD5;
		$usuario->inserir();
	}

	

?>


<h1>Usuario</h1>

<form action="index.php?p=usuario&d=add" method="post" class="form-admin">

    
    <input type="text" placeholder="Nome:" name="nome">
	
	<input type="text" placeholder="Email:" name="email">
           
	<input type="text" placeholder="Senha:" name="senha">
	
	<input type="submit" value="ENVIAR">

</form>



