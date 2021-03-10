<?php
		
require_once("global.php");
	$id = $_GET['id'];
	$conta = new contaClasse($id);

	if(isset($_POST["nome"])){
		
				
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
		
		$conta->atualizar();
	}

?>


<h1>Contato</h1>

<form action="index.php?p=contato&d=editar" method="post" class="form-admin">

    
    <input type="text" value="<?php echo $conta->nome ?>" placeholder="Nome:" name="nome">
	
	<input type="text" value="<?php echo $conta->email ?>" placeholder="Email:" name="email">
           
	<input type="text" value="<?php echo $conta->fone ?>" placeholder="Fone:" name="fone">
	
	<input type="text" value="<?php echo $conta->mensagem ?>" placeholder="Mensagem:" name="mensagem">
	
	<input type="submit" value="ENVIAR">

</form>



