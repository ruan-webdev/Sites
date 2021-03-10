<?php
/*
	require_once("conecta.php");
	$buscar = $conn->prepare("SELECT * FROM depoimento ORDER BY id");
	$buscar ->execute();
	$resultado = $buscar->fetchAll(PDO::FETCH_ASSOC);*/

			
require_once("global.php");
	$depo = new DepoClasse();
	$lista = $depo->listar();


?>
<h1>Depoimento</h1>
<table class="tabela" border="1" cellspacing="0" cellpadding="0">
  	<thead>
		<tr>
		  <td colspan="5"><a href="index.php?p=depoimento&d=add">ADD NOVO +</a></td>
		</tr>
		<tr>
			<td>ID</td>
		  	<td>MENSAGEM</td>
		  	<td>NOME</td>
		  	<td>EDITAR</td>
		  	<td>APAGAR</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($lista as $linha): ?>
		<tr>
			<td><?php echo $linha['id'] ?></td>
		  	<td><?php echo $linha['mensagem'] ?></td>
		  	<td><?php echo $linha['nome'] ?></td>
		  	<td><a href="index.php?p=depoimento&d=editar&id=<?php echo $linha['id'] ?>">EDITAR</a></td>
			<td><a href="index.php?p=depoimento&d=excluir&id=<?php echo $linha['id'] ?>">APAGAR</a></td>
		</tr>
		<?php endforeach ?>
  	</tbody>
</table>





