<?php
	
	if(isset($_POST["img"])){
		
		
require_once("global.php");
	
		$img = $_POST["img"];
        $linkUrl = $_POST["linkUrl"];

		$banner = new BannerClasse();
		$banner->img = $img;
        $banner->linkUrl = $linkUrl;
		$banner->inserir();
	}

	

?>


<h1>Banner</h1>

<form action="index.php?p=banner&d=add" method="post" class="form-admin">
    
    <input type="file" name="img" required placeholder="Insira a imagem: ">
    
    <input type="text" name="linkUrl" placeholder="Link da imagem:">
	
	<input type="submit" value="ENVIAR">

</form>



