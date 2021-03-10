<!doctype html>


<?php
    require_once ("PHPMailer/PHPMailerAutoload.php");

    $ok = "";
try{
    if(isset($_POST["nome"])){
        $assunto = "Orcamento";
        $nome = $_POST["nome"];  
        $data = $_POST["data"];
        $convidados = $_POST["convidados"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $locais = $_POST["locais"];
        $eventos = $_POST["eventos"];
        $mensagem = $_POST["mensagem"];
        
        //Passar os Campos do Form

     
        $phpmail = new PHPMailer();      
        $phpmail->isSMTP(); // envia por SMTP
        
        $phpmail->SMTPDebug = 0;						//2 passa toda a estrutura, debug etc, teste , 0 														funcionando
        $phpmail->Debugoutput = 'html';
        
        $phpmail->Host = "smtp.gmail.com"; // SMTP servers         
        $phpmail->Port = 587; // Porta SMTP do GMAIL
        
        $phpmail->SMTPSecure = 'tls';
        $phpmail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação   
        
        $phpmail->Username = "ruancamposdemarcos@gmail.com"; // SMTP username         
        $phpmail->Password = "ruancampos170499"; // SMTP password          
        $phpmail->IsHTML(true);         
        
        $phpmail->setFrom($email, $nome); 
		// E-mail do remetende enviado pelo method post  
                 
        $phpmail->addAddress("ruancamposdemarcos@gmail.com", "Orcamento");
		// E-mail do destinatario/*  
        
        $phpmail->Subject = $assunto; 
		// Assunto do remetende enviado pelo method post
                
        $phpmail->msgHTML(" Nome: $nome <br>
                            E-mail: $email <br>
                            Telefone: $telefone <br>
                            Eventos: $eventos <br>
                            Convidados: $convidados <br>
                            Locais: $locais <br>
                            Mensagem: $mensagem <br>
                            Data: $data");
        
        $phpmail->AlrBody = "Nome: $nome <br>
                            E-mail: $email <br>
                            Telefone: $telefone <br>
                            Eventos: $eventos <br>
                            Convidados: $convidados <br>
                            Locais: $locais <br>
                            Mensagem: $mensagem <br>
                            Data: $data";
                        
                          
            
        if($phpmail->send()){              
           // echo "A Mensagem foi enviada com sucesso.";
            $ok = "OK";
        }else{
            echo "Não foi possível enviar a mensagem. Erro: " .$phpmail->ErrorInfo;
        }
         
		
        // ############## RESPOSTA AUTOMATICA
        $phpmailResposta = new PHPMailer();        
        $phpmailResposta->isSMTP();
        
        $phpmailResposta->SMTPDebug = 0;
        $phpmailResposta->Debugoutput = 'html';
        
        $phpmailResposta->Host = "smtp.gmail.com";         
        $phpmailResposta->Port = 587;
        
        $phpmailResposta->SMTPSecure = 'tls';
        $phpmailResposta->SMTPAuth = true;   
        
        $phpmailResposta->Username = "ruancamposdemarcos@gmail.com";         
        $phpmailResposta->Password = "ruancampos170499";          
        $phpmailResposta->IsHTML(true);         
        
        $phpmailResposta->setFrom($email, $nome); // E-mail do remetende enviado pelo method post  
                 
        $phpmailResposta->addAddress($email, "Orcamento");// E-mail do destinatario/*  
        
        $phpmailResposta->Subject = "Resposta - " .$assunto; // Assunto do remetende enviado pelo method post
                
        $phpmailResposta->msgHTML("$nome, Em breve daremos o retorno");
        
        $phpmailResposta->AlrBody = "$nome, Em breve daremos o retorno";
            
        $phpmailResposta->send();
        
    } // FECHAR O IF
    
}catch(Exception $e){
     Erro::tratarErro($e); 
}
    
?>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>RoseBuffet</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
   
        
        <!-- Fonts and Styles css-->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/estilo.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel=”stylesheet” id=”font-awesome-css” href=”//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css” type=”text/css” media=”screen”>
        <!-- Footer Css-->
        <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
        
        <!-- Animate Css-->
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/animate.css"/>
        
         <!-- Hover Css-->
        <link rel="stylesheet" href="css/hover.css"/>
        <link rel="stylesheet" href="css/hover-min.css"/>
    	<link rel="stylesheet" href="css/demo.css">
        
        <!-- Slick Css-->
        <link rel="stylesheet" type="text/css" href="css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

        	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine2/style.css" />
	<script type="text/javascript" src="engine2/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
        
       
       
        
      </head>
           
        <body>
                <main class="site">
                <div class="mainHeader">
                            <div class="menu">

                                    <ul class="menu-direita">
                                            <li><a href="#home" class="hvr-underline-from-left" >HOME</a></li>
                                            <li><a href="#empresa" class="hvr-underline-from-left">EMPRESA</a></li>
                                            <li><a href="#espacos" class="hvr-underline-from-left">ESPAÇOS</a></li>
                                            <li><a href="#eventos" class="hvr-underline-from-left">EVENTOS</a></li>
                                            <li><a href="#gastronomia" class="hvr-underline-from-left">GASTRONOMIA</a></li>
                                            <li><a href="#depoimentos" class="hvr-underline-from-left">DEPOIMENTOS</a></li>
                                            <li><a href="#localizacao" class="hvr-underline-from-left">LOCALIZAÇÃO</a></li>

                                        <button class="orcamentoHeader"  href="#" title="">ORÇAMENTO </button> 
                                    
                                        <img src="images/logo/logo2.png">
                            
                                       
                                    </ul>
  
                            </div>
                </div>
                  
                  
                    	
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container2">
	<div class="ws_images"><ul>
		<li><img src="data2/images/buffet7.png" alt="" title="" id="wows2_0"/></li>
		<li><a href="http://wowslider.net"><img src="data2/images/buffet2.png" alt="jquery slider" title="" id="wows2_1"/></a></li>
		<li><img src="data2/images/buffet5.png" alt="" title="" id="wows2_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="data2/tooltips/buffet7.png" alt=""/>1</span></a>
		<a href="#" title=""><span><img src="data2/tooltips/buffet2.png" alt=""/>2</span></a>
		<a href="#" title=""><span><img src="data2/tooltips/buffet5.png" alt=""/>3</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">bootstrap slideshow</a> by WOWSlider.com v8.8</div>
	<div class="ws_shadow"></div>
	</div>	

                       <div class="imgSobre">
                <section class="empresaSobre" id="empresa">
                        <article>
                              <h1> ELEGÂNCIA E PRATICIDADE</h1>
                            
                                <p> No mercado a mais de 15 anos, o RoseBuffet vem realizando com sucesso todos os sonhos de seus clientes </p>   
                                    <br> <br>  <br>
                              
                                <p> desde festa de aniversários até casamentos, sempre com segurança , praticidade e sofisticação,
                                sendo uma  <br>  <br>das
                                principais referências no quesito mercado de buffet.</p>
                        </article>
                </section>
                        </div>
            
                    <section class="empresaTitle1" id=espacos>
                            <article>
                                    <h1>NOSSOS ESPAÇOS</h1>    
                                    <hr>
                                    <p>Temos os mais diversificados espaços localizados em SP, basta escolher o local mais perto de você</p>
                            
                            </article>
                        </section>
                        
                        <section class="empresaEspaco">
                        
                              <article class="wow fadeInUpBig">
                                <img src="images/sections/espaco.png">
                                    <h2>Espaço Vila Maria</h2>    
                              </article>
                         
                            <article class="wow fadeInUpBig">
                                    <img src="images/sections/espaco2.png">
                                    <h2>Espaço Butanta</h2>
                                 
                            </article>
                         
                            <article class="wow fadeInUpBig">
                                    <img src="images/sections/espaco3.png" >
                                    <h2>Espaço Paulista</h2>
                                  
                            </article>
            
                            <article class="wow fadeInUpBig">
                                <img src="images/sections/espaco4.png">
                                    <h2>Espaço Barra Funda</h2>
                                  
                            </article>
                    </section>
                
                     
                     <section class="empresaTitle" id=eventos>
                                    <h1>NOSSOS EVENTOS</h1>
                                     <hr>
                     </section>
                            <section class="empresaEventos">
                            <article class="wow fadeInUpBig">
                                <img src="images/events/aniversario3.png" class=" wow fadeInUpBig">
                                    <h2>DEBUTANTES</h2>    
                                    <p> Seus 15 anos é sem duvida uma é data muito especial e precisa ser celebrada da melhor forma, então conte com a gente para garantir um dia de princesa para você, com toda luxuria e glamour possivel. </p>
                            
                            </article>
                         
                            <article class="wow fadeInUpBig">
                                    <img src="images/events/casamento.png" class=" wow fadeInUpBig">
                                    <h2>CASAMENTOS</h2>
                                    <p>Queremos deixar a nossa marca no dia mais emocionante da sua vida, então conte com a gente para realizar o seu casamento e deixa-lo de forma memoravel.</p>
                            </article>
                         
                            <article class="wow fadeInUpBig">
                                    <img src="images/events/corporativo.png" >
                                    <h2>CORPORATIVOS</h2>
                                    <p>Sua empresa está comemorando aquela parceria milionária ou criando um evento com todo glamour que seus funcionarios e parceiros merecem? Então apenas desfrute e deixe que a gente dê o nosso toque de glamour.</p>
                            </article>
            
                            <article class="wow fadeInUpBig">
                                <img src="images/events/crianca(1).png" class="wow fadeInUpBig">
                                    <h2>ANIVERSARIOS</h2>
                                    <p> Quer comemorar o aniversário de seu filho? então conte com a gente, iremos garantir um dia memoravel e muito divertido para a sua criança.</p>
                            </article>
            
                    </section>
                    <div class="divisor">
                                    <img src="images/sections/divisor.png" width="1200px" style=" max-width: 1200px; margin: 0 auto; margin-left: 350px; margin-top: 40px;" class="wow fadeInUpBig" >
                    
                            </div>
            
                    <br><br><br>     <br><br><br>
                
                     <section class="gastronomia" id=gastronomia>
                        <article class="banner21 ">
                                <img class="minhasImagens" src="images/sections/pratos.png" alt="Banner">
                                <img class="minhasImagens" src="images/sections/pratos2.png" alt="Banner">
                                <img class="minhasImagens" src="images/sections/pratos3.png" alt="Banner">
                        </article>
                         
                         <h1 style="text-align: center; height: 20px; left: 200px; position: relative">GASTRONOMIA</h1>
                                  
                 
                         <article class="gastronomia-text">
                         
                            <p>Nossa alta Gastronomia é referência, com menus sofisticados e uma equipe altamente qualificada. Nosso intuito é satisfazer o paladar de cada cliente, garantindo excelência e alto padrão.
                            Venha se encantar com nossos espaços e serviços exclusivos para Casamento, Festa de Debutante, Corporativo, Aniversário e Bodas.</p>
                             
                             <a href="#" title="">Veja os Cardapios</a>
                             
                             
                         </article>
                    </section>
            
                        <div class="divisor">
                                    <img src="images/sections/divisor.png" width="1200px" style=" max-width: 1200px; margin: 0 auto; margin-left: 350px; margin-top: 40px; justify-content: center" >
                    
                            </div>
                    <section class="depoimento-text" id="depoimentos">
                            <article>
                                <h1>DEPOIMENTOS</h1>
                                <hr>
                           </article>
                    </section>    
                    <section class="depoimentoEspaco">
                            <article>
                                
                                <p>Fiquei muito feliz com a minha festa de debutante de 15 anos,<br>foi um momento magico na minha vida, tudo estava tão perfeito <br>da forma com a que imaginei, então agradeço de coração por<br> tudo que o Buffet Gusteau proporcionou para mim no meu <br>dia tão especial.</p>
                                <img src="images/sections/depoimento1.PNG">
                                <h1>Lucas Costa</h1>
                                <h2>29/05/2018 - Debutantes</h2>
                            </article>
                    </section>

                    <section class="orcamento" id="orcamento">
                        <h1>Realize Seus Sonhos No Rose Buffet </h1>
                        <h2>Entre em Contato com a gente para receber seu orçamento!</h2>
                         <img src="images/sections/orcamento1.png">
                        
                               
                        
                    </section> 

                        <button class="orcamentoFooter" onclick="document.getElementById('id01').style.display='block'">ORÇAMENTO</button>
                       
                        
                        <div id="id01" class="modal">
  
              <form class="modal-content animate" method="post" action="index.php">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                 
                </div>

                <div class="container">
                                              <label for="nome">Nome:</label>
                                            <input type="text" id="nome"  name="nome" placeholder="Seu nome: ">
                                            <br>
                                            <label for="data">Data Do Evento:</label>
                                            <input type="date" id="data" name="data" placeholder="D..">
                                                 <br>
                                              <br>
                                            <label for="convidados">Quantidade De Convidados:</label>
                                            <input type="number" id="convidados" name="convidados" style="width:45px">
                                               <br>
                                            
                                              <label for="telefone">Telefone Contato:</label>
                                            <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone..">
                                                <br>
                                              <label for="email">Email:</label>
                                            <input type="text" id="email" name="email"  placeholder="Digite seu email..">
                                                     <br>
                  
                                             <label  for="conheceu" >Como nos Conheceu:</label>
                                            <select  id="locais" name="locais" >
                                              <option value="Redes Sociais">Redes Sociais</option>
                                              <option value="Amigos">Amigos</option>
                                              <option value="Blogs">Blogs</option>
                                            <option value="Sites">Sites</option>
                                            <option value="Outros">Outros</option>
                                            </select> 
                        
    
                                             <label for="eventos" >Tipo De Evento:</label>
                                            <select id="eventos" name="eventos">
                                              <option value="Debutantes">Debutantes</option>
                                              <option value="Casamentos">Casamentos</option>
                                              <option value="Corporativo">Corporativo</option>
                                                <option value="Aniversarios">Aniversarios</option>
                                            </select>
                                                         <br>
                                              <label for="mensagem">Mensagem:</label>
                                            <input type="text" id="mensagem" name="mensagem" placeholder="Digite sua mensagem..">
                </div>

                <div class="container" style="background-color:#f1f1f1">
                      <input type="submit" class="enviarBtn" value="Enviar">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
                  
                </div>
              </form>
</div>
                
            <footer class="footer-distributed" id=localizacao>

			<div class="footer-left">

				<h3>Rose<span>Buffet</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Empresa</a>
					·
					<a href="#">Espaços</a>
					·
					<a href="#">Eventos</a>
					·
					<a href="#">Gastronomia</a>
					·
					<a href="#">Blog</a>
                    ·
                  <a href="#">Localização</a>
				</p>

				<p class="footer-company-name">RDL Dev &copy; 2018</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>1500 Av Marechal Tito</span> São Miguel, SP</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+55 11 99234-5681</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="rosebuffet@contato.com">rosebuffet@contato.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Sobre a Empresa</span>
				  No mercado a mais de 15 anos, o RoseBuffet vem realizando com sucesso todos os sonhos de seus clientes    
                               desde festa de aniversários até casamentos, sempre com segurança , praticidade e sofisticação,
                                sendo uma  das
                                principais referências no quesito mercado de buffet.</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer> 
                    
                   
                </main>
           <a href="#0" class="cd-top js-cd-top">Top</a>
                <script src="js/main.js"></script>
    
               <script src="js/rolagem.js"></script>
     <script src="js/jquery-1.11.0.min.js"></script>

    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/slick.js"></script>
    
    <script src="js/animacao.js"></script>
    <script src="js/bannerTop.js"></script>
    
    <script src="js/wow.js"></script>
     <script>
              new WOW().init();
              </script>
    

        <script src="js/modal.js"></script>

    <script type="text/javascript" src="engine2/wowslider.js"></script>
	<script type="text/javascript" src="engine2/script.js"></script>

         
        </body>
    
</html>