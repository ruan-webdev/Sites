<?php

require_once("global.php");
	$id = $_GET['id'];
	 $eventos = new eventoClasse();

	if(isset($_POST["titulo"])){
		
require_once("global.php");
		$id = $_POST["id"];
		$img = $_POST["img"];
		$titulo = $_POST["titulo"];
		$texto = $_POST["texto"];
	   
        $eventos = new eventoClasse();
        $eventos->img = $img;
		$eventos->titulo = $titulo;
		$eventos->texto = $texto;
		$eventos->atualizar();
	}

?>


<h1>Eventos</h1>

<form action="index.php?p=sobre&d=editar" method="post" class="form-admin">

	<input type="hidden" name="id" value="<?php echo $eventos->id ?>">
    
    <img style="max-width: 220px; max-height: 111px;" src="<?php echo "../img/".$eventos->img ?>" alt="">
    
    <input type="file" value="<?php echo $eventos->img ?>" placeholder="Imagem:" name="img">
	
	<input type="text" value="<?php echo $eventos->titulo ?>" placeholder="Título:" name="titulo">
    
    <textarea rows="20" cols="20" name="texto" placeholder="Digite o depoimento">
	
	<?php echo $eventos->texto ?>
	
	</textarea>
    
    
	
	<input type="submit" value="ENVIAR">

</form>



