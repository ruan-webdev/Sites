<?php
		
require_once("global.php");
	$id = $_GET['id'];
	$banner = new BannerClasse($id);

	if(isset($_POST["linkUrl"])){
		
				
require_once("global.php");
		
		$id = $_POST["id"];
        $img = $_POST["img"];
        $linkUrl = $_POST["linkUrl"];

		$banner = new BannerClasse($id);
		$banner->img = $img;
        $banner->linkUrl = $linkUrl;
		$banner->atualizar();
	}

?>


<h1>Banner</h1>

<form action="index.php?p=banner&d=editar" method="post" class="form-admin">

	<input type="hidden" name="id" value="<?php echo $banner->id ?>">
    
    <img style="max-width: 220px; max-height: 111px;" src="<?php echo "../img/".$banner->img ?>" alt="">
    
    <input type="file" value="<?php echo $banner->img ?>" placeholder="Imagem:" name="img">
    
    <input type="text" value="<?php echo $banner->linkUrl ?>" placeholder="Link:" name="linkUrl">
	
	<input type="submit" value="ENVIAR">

</form>



