<?php
	
		
require_once("global.php"); //variavel global

	try{ // Verifica...tenta
	$id = $_GET['id'];
	$depo =  new DepoClasse($id);
	}catch(Exception $e){ // Pegar...Carregar
		Erro::CarregarErro($e);
	}
	
if(isset($_POST["texto"])){
	
			

				
require_once("global.php");
		$id = $_POST["id"];
		$texto = $_POST["texto"];
		$nome = $_POST["nome"];

		$depo = new DepoClasse($id);
		$depo->mensagem = $texto;
		$depo->nome = $nome;
		$depo->atualizar();
	}

?>


<h1>Depoimento</h1>

<form action="index.php?p=depoimento&d=editar" method="post" class="form-admin">
	
	<input type="hidden" name="id" value="<?php echo $depo->id ?>">

	<textarea rows="20" " cols="20" name="texto" placeholder="Digite o depoimento"><?php echo $depo->mensagem ?>"</textarea>
	
	<input type="text" value="<?php echo $depo->nome ?>" "placeholder="Nome:" name="nome">

	<input type="submit" value="ENVIAR">

</form>
									   



