<?php
/*
	require_once("conecta.php");
	$buscar = $conn->prepare("SELECT * FROM depoimento ORDER BY id");
	$buscar ->execute();
	$resultado = $buscar->fetchAll(PDO::FETCH_ASSOC);*/

/*$senhaMD5 = md5($senha);
$usuario->senha = $senhaMD5;
*/
		
require_once("global.php");
	$usuario = new usuarioClasse();
	$lista = $usuario->listar();


?>

<h1>Usuario</h1>
<table class="tabela" border="1" cellspacing="0" cellpadding="0">
  	<thead>
		<tr>
		  <td colspan="5"><a href="index.php?p=usuario&d=add">ADD NOVO +</a></td>
		</tr>
		<tr>
			<td>ID</td>
            <td>NOME</td>
		  	<td>EMAIL</td>
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
		  	<td><a href="index.php?p=usuario&d=editar&id=<?php echo $linha['id'] ?>">EDITAR</a></td>
			
			<td><a href="index.php?p=usuario&d=excluir&id=<?php echo $linha['id'] ?>">APAGAR</a></td>
            
		</tr>
		<?php endforeach ?>
  	</tbody>
</table>




