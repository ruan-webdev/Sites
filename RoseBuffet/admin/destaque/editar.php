<?php
		
require_once("global.php");
	$id = $_GET['id'];
	$destaque = new DestaClasse($id);

	if(isset($_POST["titulo"])){
		
				
require_once("global.php");
		
		$id = $_POST["id"];
        $img = $_POST["img"];
		$titulo = $_POST["titulo"];
		$texto = $_POST["texto"];
        $linkUrl = $_POST["linkUrl"];

		$destaque = new DestaClasse($id);
		$destaque->img = $img;
		$destaque->titulo = $titulo;
        $destaque->texto = $texto;
        $destaque->linkUrl = $linkUrl;
		$destaque->atualizar();
	}

?>


<h1>Destaque</h1>

<form action="index.php?p=destaque&d=editar" method="post" class="form-admin">

	<input type="hidden" name="id" value="<?php echo $depo->id ?>">
    
    <img style="max-width: 220px; max-height: 111px;" src="<?php echo "../img/".$destaque->img ?>" alt="">
    
    <input type="file" value="<?php echo $destaque->img ?>" placeholder="Imagem:" name="img">
	
	<input type="text" value="<?php echo $destaque->titulo ?>" placeholder="Título:" name="titulo">
    
    <textarea rows="20" cols="20" name="texto" placeholder="Digite o depoimento">
	
	<?php echo $destaque->texto ?>
	
	</textarea>
    
    <input type="text" value="<?php echo $destaque->linkUrl ?>" placeholder="Link:" name="linkUrl">
	
	<input type="submit" value="ENVIAR">

</form>



