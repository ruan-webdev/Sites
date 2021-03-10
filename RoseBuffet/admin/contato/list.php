<?php
/*
	require_once("conecta.php");
	$buscar = $conn->prepare("SELECT * FROM depoimento ORDER BY id");
	$buscar ->execute();
	$resultado = $buscar->fetchAll(PDO::FETCH_ASSOC);*/

	require_once("global.php");
	$conta = new contaClasse();
	$lista = $conta->listar();


?>

<h1>Contato</h1>
<table class="tabela" border="1" cellspacing="0" cellpadding="0">
  	
	<thead>
        <tr>
		  <td colspan="7"><a href="index.php?p=contato&d=add">ADD NOVO +</a></td>
		</tr>
		
		<tr>
		  <td>ID</td>
		  <td>NOME</td>
		  <td>E-MAIL</td>
		  <td>TELEFONE</td>
		  <td>MENSAGEM</td>
          <td>EDITAR</td>
          <td>APAGAR</td>
		</tr>
	</thead>
  	<tbody>
	 <?php foreach($lista as $linha): ?>
		<tr>
			<td><?php echo $linha['id'] ?></td>
		  	<td><?php echo $linha['nome'] ?></td>
		  	<td><?php echo $linha['email'] ?></td>
            <td><?php echo $linha['fone'] ?></td>
            <td><?php echo $linha['mensagem'] ?></td>
		  	  	<td><a href="index.php?p=contato&d=editar&id=<?php echo $linha['id'] ?>">EDITAR</a></td>
			
			<td><a href="index.php?p=contato&d=excluir&id=<?php echo $linha['id'] ?>">APAGAR</a></td>
            
		</tr>
		<?php endforeach ?>
  	</tbody>
</table>





