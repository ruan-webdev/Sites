<?php

	require_once("global.php");
	$evento = new eventoClasse();
	$lista = $evento->listar();


?>
<h1>EVENTOS </h1>
<table class="tabela" border="1" cellspacing="0" cellpadding="0">
  	<thead>
		<tr>
		  <td colspan="6"><a href="index.php?p=$eventos&d=add">ADD NOVO +</a></td>
		</tr>
		<tr>
			<td>ID</td>
			<td>IMAGEM</td>
		  	<td>TITULO</td>
            <td>TEXTO</td>
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
		  	
            <td><?php echo $linha['titulo'] ?></td>
            
            <td><?php echo $linha['texto'] ?></td>
            
		  	<td><a href="index.php?p=eventos&d=editar&id=<?php echo $linha['id'] ?>">EDITAR</a></td>
			
			<td><a href="index.php?p=eventos&d=excluir&id=<?php echo $linha['id'] ?>">APAGAR</a></td>
		</tr>
		<?php endforeach ?>
  	</tbody>
</table>





