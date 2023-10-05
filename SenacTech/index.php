<?php
   session_start();
   ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title>SenacTech - Menu Principal</title>
	  
      <meta name="viewport" content="width=device-width,initial-scale=0.6">
      <meta charset="UTF-8">
	  
      <link rel="stylesheet" type="text/css" href="./estilo/css.css" />
      <link rel="stylesheet" type="text/css" href="./estilo/inicio.css" />
	  
      <table align="justify">
         <tr>
            <td align="left" width="850"></td>
            <td align="left" width="900" ></td>
         </tr>
         <tbody>
            <tr>
               <td align="left">
                  <a href="index.php">    
                  <img id="senac" src="img/senac.png" >
                  </a>
               </td>
               <td align="left" valign="bottom">
                  <h2 style="font-family:verdana" color="red">SenacTech - RS</h2>
               </td>
               <td>
                  <a href="https://www.facebook.com/senactech/?locale=pt_BR">  
                  <img class="logos" src="img/facebook.png"> 
                  </a>
               </td>
               <td>
                  <a href="https://www.instagram.com/p/Cdod7rzsEpo/">
                  <img class="logos" src="img/instagram.png"> 
                  </a>
               </td>
               <td>
                  <a href="https://twitter.com/senacrs">
                  <img class="logos" src="img/twitter.png"> 
                  </a>
               </td>
               <td>
                  <a href="https://br.linkedin.com/posts/senac-rs_senac-tech-activity-6782286113403936768-9AR6?trk=public_profile_like_view">
                  <img class="logos" src="img/linkedin.png"> 
                  </a>
               </td>
               <td>
                  <a href="https://br.linkedin.com/posts/senac-rs_senac-tech-activity-6782286113403936768-9AR6?trk=public_profile_like_view">
                  <img class="logos" src="img/fale.png"> 
                  </a>
               </td>
               </tr>
         </tbody>
      </table>
      <section>
         <input type="checkbox" 
            id="bt_menu" />
         <label for="bt_menu">
         &#9776;
         </label>
         <nav id="menu">
            <ul >
               <li><a href="../index.php">Menu Principal</a>
			   
               <li><a href="Cursos/Cursos.php">Cursos e Programas</a>
			   
                  <ul>
                     <li>
                        <a href="Cursos/TecDev.php">
                        Tecnico em Desenvolvimento
                        </a>
                     </li>
                     <li>
                        <a href="Cursos/TecInfo.php">
                        Tecnico em Informatica
                        </a>
                     </li>
                     <li>
                        <a href="Cursos/TecAdm.php">
                        Tecnico em Administração
                        </a>
                     </li>
                     <li>
                        <a href="Cursos/RsTi.php">
                        Programa RS-TI
                        </a>
                     </li>
                     <li>
                        <a href="Cursos/Aprendizagem.php">
                        Programa Aprendizagem
                        </a>
                     </li>
                  </ul>
               <li><a href="Localizacao/Localizacao.php">Localização</a></li>
			   
               <li><a href="form/index.php">Fale Conosco</a></li>
			   
               <li><a href="cadastro/cadastro.php">Cadastro</a></li>
			   
               <li><a href="cadastro/login.php">Login</a></li>
            </ul>
        </nav>
      </section>
      <br>
	  <div id="teste" style=" font-family: verdana; background-color: #4682B4; font-size: 20px; color: white; padding-top: 10px; padding-bottom: 10px; padding-left: 10px;css " >
	  
      <?php
         if(isset($_SESSION['nome_usu_sessao'])){
         	echo '  Olá '.$_SESSION['nome_usu_sessao'].', seja bem vindo de volta ao nosso site. Se quiser encessar sua sessão clique ';
         	echo "<a href='./index.php?logout'>aqui.</a>";
         }else{
         	echo "Seja bem vindo visitante, se deseja acessar o sistema <a href='./cadastro/login.php'>clique aqui.</a>";
         }
         if(isset($_GET['logout'])){
         	session_destroy();
         }
      ?>
	  </div>
      <br>
      <img id="imgbanner" src="img/banner.jpg" title="SenacTech" >
   </head>
   <body>
   <div id="depodiv">
      <img id="depo1" src="img/depo1.png">
      <img id="depo2" src="img/depo2.png">
   </div>
   <br>
   <img id="img1" src="img/apresentacao.png" >
   <p id="txt1">
      APRESENTAÇÃO<br>
      O Serviço Nacional de Aprendizagem Comercial – Senac é uma instituição de  <br> 
      educação profissional, fundada em 10 de janeiro de 1946, com o objetivo  <br>
      de colaborar na obra, difusão e aperfeiçoamento do ensino profissional no setor <br>
      terciário. No Rio Grande do Sul, o Senac foi instalado em 13 de setembro do mesmo <br>
      ano e já capacitou mais de 7 milhõesde gaúchos em seus mais de 70 anos de atuação.<br>
      A instituição cumpre a importante missão de educar para o trabalho em atividades do <br>
      comércio de bens, serviços e turismo. O Senac-RS faz parte da Federação do Comércio <br>
      de Bens e Serviços do Rio Grande do Sul – Fecomércio-RS, o que vincula a entidade ao <br>
      mundo do trabalho por meio de 569 mil empresas do comércio de bens, serviços e <br>
      turismo – que geram um milhão de empregos formais.
   </p>
   <img id="imgbanner" src="img/banner2.png" title="SenacTech" >
   <div>
      <img  align="right" src="img/principios.jpeg" width="700" height="424">
      <p id="txt2">
         MISSÃO, VISÃO E PRINCÍPIOS<br>
         <br>
         MISSÃO<BR>
         "Educar para o trabalho em atividades de comércio de bens, serviços e turismo."<BR>
         <BR>
         VISÃO<BR>
         "Ser a instituição brasileira que oferece as melhores soluções em educação profissional, reconhecida pelas empresas."<BR>
         <BR>
         PRINCÍPIOS<BR>
         "Busca de harmonia; Consciência em ação; Transparência; Responsabilidade pelo todo; Pró-soluções; Equilíbrio de interesses; Respeito à diversidade; <BR> Sustentabilidade"<BR>
      </p>
   </div>
   <div align="center">
      <img align="left" src="img/qualidade.jpg" width="700" height="400">
      <p id="txt3">
         <BR>
         POLÍTICA DE QUALIDADE<br>
         <br>
         A Gestão da Qualidade do Senac–RS tem como objetivos:<BR>
         <BR>
         - Satisfazer os clientes com Educação Profissional de excelência;<BR>
         <BR>
         - Atender aos requisitos das Partes Interessadas;<BR>
         <BR>
         - Praticar um Sistema de gestão inovador, ágil e sustentável.<BR>
         <BR>
      </p>
      </font>
   </div>
   <table align="justify">
   <tr>
      <td align="left" width="850"></td>
      <td align="left" width="900" ></td>
   </tr>
   </thead>
   <tbody>
      <tr>
         <td align="left"><a href="index.php">    
		 <img src="img/senac.png" alt="Voltar ao Menu" width="100" height="50">
            </a>
         </td>
         <td align="left" valign="bottom">
            <h2 style="font-family:verdana" color="red">SenacTech - RS</h2>
         </td>
         <td>
            <a href="https://www.facebook.com/senactech/?locale=pt_BR">  
            <img class="logos" src="img/facebook.png"> 
            </a>
         </td>
         <td>
            <a href="https://www.instagram.com/p/Cdod7rzsEpo/">
            <img class="logos" src="img/instagram.png"> 
            </a>
         </td>
         <td>
            <a href="https://twitter.com/senacrs">
            <img class="logos" src="img/twitter.png"> 
            </a>
         </td>
         <td>
            <a href="https://br.linkedin.com/posts/senac-rs_senac-tech-activity-6782286113403936768-9AR6?trk=public_profile_like_view">
            <img class="logos" src="img/linkedin.png"> 
            </a>
         </td>
         <td>
            <a href="https://br.linkedin.com/posts/senac-rs_senac-tech-activity-6782286113403936768-9AR6?trk=public_profile_like_view">
            <img class="logos" src="img/fale.png"> 
            </a>
         </td>
            </tr>
      </tbody>
   </table>
   </body>
</html>