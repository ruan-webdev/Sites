<?php
	

?>







<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gusteau Buffet</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body>
	<span class="bckg"></span>
		<header>
		  <h1>Gusteau Buffet</h1>
		  <nav>
			<ul>
			  	<li><a href="index.php?p=dashboard" data-title="dashboard">Dashboard</a></li>
			  	<li><a href="index.php?p=usuario" data-title="Usuário">Usuário</a></li>
                <li><a href="index.php?p=contato" data-title="Contato">Contatos</a></li>
			    <li><a href="index.php?p=banner" data-title="Banner">Banner</a></li>
				<li><a href="index.php?p=espacos" data-title="Espacos">Espaços</a></li>
                <li><a href="index.php?p=eventos" data-title="Texto">Eventos</a></li>
				<li><a href="index.php?p=gastronomia" data-title="Destaque">Gastronomia</a></li>
				<li><a href="index.php?p=depoimento" data-title="Depoimento">Depoimento</a></li>
		
			</ul>
		  </nav>
		</header>
		<main>
		  <div class="title">
			<h2><?php echo @$_GET['p']; ?></h2>
			<h3>Ruan Campos!</h3>
		  </div>

		  <article>
			<?php
			  $pagina = @$_GET['p'];
			  
			  	if($pagina == NULL){
					require_once("dashboard/dashboard.php");
				}else{
			  	
			  	if($pagina == "dashboard"){require_once("dashboard/dashboard.php");}
			  	if($pagina == "usuario"){require_once("usuario/usuario.php");}
		        if($pagina == "contato"){require_once("contato/contato.php");}
			  	if($pagina == "banner"){require_once("banner/banner.php");}
				if($pagina == "espacos"){require_once("espacos/espacos.php");}
                if($pagina == "eventos"){require_once("eventos/eventos.php");}
				if($pagina == "gastronomia"){require_once("gastronomia/gastronomia.php");}
				if($pagina == "depoimento"){require_once("depoimento/depoimento.php");}
			
					
				}
			?>
			  
		  </article>
		</main>
	
<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>









