<?php

		
require_once("global.php");
	$banner = new BannerClasse();
	$lista = $banner->listar();


?>
<h1>Banner</h1>
<table class="tabela" border="1" cellspacing="0" cellpadding="0">
  	<thead>
		<tr>
		  <td colspan="5"><a href="index.php?p=banner&d=add">ADD NOVO +</a></td>
		</tr>
		<tr>
			<td>ID</td>
		  	<td>IMAGEM</td>
            <td>LINK</td>
		  	<td>EDITAR</td>
		  	<td>APAGAR</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($lista as $linha): ?>
		<tr>
			<td><?php echo $linha['id'] ?></td>
		  	
            <td>
            
                <img style="max-width: 220px; max-height: 111px;" src="<?php echo "../img/".$linha['img']?> "> 
   
            </td>
            
            <td><?php echo $linha['linkUrl'] ?></td>
            
		  	<td><a href="index.php?p=banner&d=editar&id=<?php echo $linha['id'] ?>">EDITAR</a></td>
			
			<td><a href="index.php?p=banner&d=excluir&id=<?php echo $linha['id'] ?>">APAGAR</a></td>
		</tr>
		<?php endforeach ?>
  	</tbody>
</table>





