<?php
		
require_once("global.php");
	$id = $_GET['id'];
	$usuario = new usuarioClasse($id);

	if(isset($_POST["nome"])){
		
				
require_once("global.php");
		
		$id = $_POST["id"];
        $nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$senhaMD5 = md5($senha);


		$usuario = new usuarioClasse($id);
		$usuario->nome = $nome;
		$usuario->email = $email;
     	$usuario->senha = $senhaMD5;
		$usuario->atualizar();
	}

?>


<h1>Usuario</h1>

<form action="index.php?p=usuario&d=editar" method="post" class="form-admin">

    
    <input type="text" value="<?php echo $usuario->nome ?>" placeholder="Nome:" name="nome">
	
	<input type="text" value="<?php echo $usuario->email ?>" placeholder="Email:" name="email">
           
	<input type="text" value="<?php echo $usuario->senha ?>" placeholder="Senha:" name="senha">
	
	<input type="submit" value="ENVIAR">

</form>



