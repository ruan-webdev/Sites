<?php
	
	if(isset($_POST["titulo"])){
		
			
require_once("global.php");
	
		$titulo = $_POST["titulo"];
		$texto = $_POST["texto"];
        $linkUrl = $_POST["linkUrl"];
        
        // Enviar Arquivo
        $arquivo = $_FILES["arquivo"];
        
        
       // Se ocorrer erros
        if($arquivo["error"]){
            throw new Exception("Error: ".$arquivo["error"]);
            
        }
        
        if(move_uploaded_file($arquivo["tmp_name"], "../img/".$arquivo["name"] )){
            
            $img = $arquivo["name"];
            
        }else{
            throw new Exception("Não foi possível realizar o upload.");
            
        }

		$destaque = new DestaClasse();
        $destaque->img = $img;
		$destaque->titulo = $titulo;
		$destaque->texto = $texto;
        $destaque->linkUrl = $linkUrl;
		$destaque->inserir();
	}

	

?>


<h1>Destaque</h1>

<form action="index.php?p=destaque&d=add" method="post" class="form-admin" enctype="multipart/form-data">
    
    <input type="file" name="arquivo" required placeholder="Insira a imagem (220x111): ">
    
    <input type="text" placeholder="Título:" name="titulo">
           
	<textarea rows="20" cols="20" name="texto" placeholder="Digite o texto"></textarea>
	
	<input type="text" placeholder="Link:" name="linkUrl">
	
	<input type="submit" value="ENVIAR">

</form>



