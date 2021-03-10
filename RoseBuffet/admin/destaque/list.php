<?php
/*
	require_once("conecta.php");
	$buscar = $conn->prepare("SELECT * FROM depoimento ORDER BY id");
	$buscar ->execute();
	$resultado = $buscar->fetchAll(PDO::FETCH_ASSOC);*/

		
require_once("global.php");
	$destaque = new DestaClasse();
	$lista = $destaque->listar();


?>

<h1>Destaque</h1>
<table class="tabela" border="1" cellspacing="0" cellpadding="0">
  	<thead>
		<tr>
		  <td colspan="7"><a href="index.php?p=destaque&d=add">ADD NOVO +</a></td>
		</tr>
		<tr>
			<td>ID</td>
            <td>IMAGEM</td>
		  	<td>TITULO</td>
		  	<td>TEXTO</td>
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
            
		  	<td><?php echo $linha['titulo'] ?></td>
		  	<td><?php echo $linha['texto'] ?></td>
            <td><?php echo $linha['linkUrl'] ?></td>
		  	<td><a href="index.php?p=destaque&d=editar&id=<?php echo $linha['id'] ?>">EDITAR</a></td>
			
			<td><a href="index.php?p=destaque&d=excluir&id=<?php echo $linha['id'] ?>">APAGAR</a></td>
            
		</tr>
		<?php endforeach ?>
  	</tbody>
</table>




