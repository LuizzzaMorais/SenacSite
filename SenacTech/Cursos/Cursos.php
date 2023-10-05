<?php
	session_start();
?>	
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title>SenacTech - Menu Principal</title>
      <meta name="viewport" content="width=device-width,initial-scale=0.6">
      <!-- Definição de codificação de caracteres. Recomenda-se usar sempre UTF-8 -->
      <meta charset="UTF-8">
      <link rel="stylesheet" 
         type="text/css" 
         href="../estilo/css.css" />
		 <link rel="stylesheet" 
         type="text/css" 
         href="../estilo/cursos.css" />
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
               </tr
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
            <!-- inicio UL principal-->
            <li>
               <a href="../index.php">
               Menu Principal
               </a>
            <li>
               <!-- inicio LI pagina 2-->
               <a href="../Cursos/Cursos.php">
               Cursos e Programas
               </a>
               <ul>
                  <!-- inicio UL sb index-->
                  <li>
                     <a href="../Cursos/TecDev.php">
                     Tecnico em Desenvolvimento
                     </a>
                  </li>
                  <li>
                     <a href="../Cursos/TecInfo.php">
                     Tecnico em Informatica
                     </a>
                  </li>
                  <li>
                     <a href="../Cursos/TecAdm.php">
                     Tecnico em Administração
                     </a>
                  </li>
                  <li>
                     <a href="../Cursos/RsTi.php">
                     Programa RS-TI
                     </a>
                  </li>
                  <li>
                     <a href="../Cursos/Aprendizagem.php">
                     Programa Aprendizagem
                     </a>
                  </li>
               </ul>
               <!-- fim UL sb index-->
            </li>
            </li><!-- fim LI pagina 2-->
            <li>
               <!-- inicio LI pagina 3-->
               <a href="../Localizacao/Localizacao.php">Localização</a>
            </li>
            <!-- fim LI pagina 3-->
               <li><a href="../form/index.php">Fale Conosco</a></li>
			<li><a href="../cadastro/cadastro.php">Cadastro</a></li>
			<li><a href="../cadastro/login.php">Login</a></li>
         </ul>
         <!-- fim UL principal-->
      </nav>
	  </section>
   </head>
   <br>
   <div id="teste" style=" font-family: verdana; width: 100%; background-color: #004080; font-size: 20px; color: white; padding-top: 10px; padding-bottom: 10px; padding-left: 10px;css " >
<?php
if(isset($_SESSION['nome_usu_sessao'])){
			echo 'Olá '
			.$_SESSION['nome_usu_sessao'].', seja bem vindo de volta ao nosso site. Se quiser encessar sua sessão clique ';
			echo "<a href='./Cursos.php?logout'>aqui.</a>";
		}else{
			echo "Seja bem vindo visitante, se deseja acessar o sistema <a href='../cadastro/login.php'>clique aqui.</a>";
		}
		if(isset($_GET['logout'])){
			session_destroy();
		}
		?>
		</div>
   <br>
   <body>
   <img id="banner" src="../img/cursoamarelo.png">
   <div>
   <p class="titulo">
   CURSOS E PROGRAMAS OFERECIDOS PELO SENAC:
   </p>
   <p id="corpo">
   Se você busca uma capacitação para entrar no mercado de trabalho, nem sempre a opção natural é buscar uma graduação. Há outras
   alternativas, principalmente, para quem procura formações em um curto espaço de tempo, como o curso livre, o curso técnico e
   também os cursos tecnólogos. Todos são indicados para pessoas que buscam conhecimento rapidamente para conseguir um emprego,
   uma promoção ou até trocar de área. No entanto, há diferenças importantes.
   </p>
   </div>
   
   <div>
   <img id="banner" src="../img/bannercurso.png">
	<p class="titulo">
   Cursos Técnicos:
   </p>
   <p id="corpobranco">
   O curso técnico é uma boa opção em relação às graduações tradicionais e ao tecnólogo. O principal objetivo dessa modalidade é preparar o estudante para o mercado profissional em alguma especialidade. Alguns especialistas acreditam que o retorno financeiro para quem faz um curso técnico é maior e mais imediato em relação à graduação, por exemplo.
   </p>
   </div>
   <div>
   <p class="subtitulo">
   Vantagens do Curso Técnico:<br>
   </p>
   <ul id="corpo branco" type="disc">
   <li class="li">Menor duração que a graduação, podendo ficar entre 12 a 24 meses;</li>
   <li class="li">Possibilita entrar no mercado de trabalho em menos tempo;</li>
   <li class="li">Profissionais especializados em determinada função encontram salários atrativos;</li>
   <li class="li">Pode ser cursado juntamente ao ensino médio;</li>
   <li class="li">Tem essência prática e não teórica;</li>
   <li class="li">Há falta de mão de obra técnica no mercado, o que aumenta as chances de emprego.</li>
   </ul> 
	<p class="subtitulo">  
   Clique abaixo para acessar algum dos cursos tecnicos oferecidos pelo Senac RS:
   </p> 
	<ul id="corpo branco" type="disc">
   <li class="li"><a	href="../Cursos/TecDev.php" align="center">Técnico em Desenvolvimento</li>
   <li class="li"><a	href="../Cursos/TecInfo.php" align="center">Técnico em Informática </li>
   <li class="li"><a	href="../Cursos/TecAdm.php" align="center">Tecnico em Administração</a></li>
   </ul> 
   </div>
   <div>
   <p class="titulo">
   Cursos Livres:<br>
   </p>
   <p id="corpobranco">
   Ao contrário de um curso técnico, os cursos livres não precisam de uma regulamentação do MEC ou outro órgão do governo.
   Ou seja, pode ser oferecido livremente por qualquer instituição de ensino, empresa ou órgão público.
   E quanto tempo dura um curso livre? São caracterizados pela pequena carga horária e por abordar um assunto bastante 
   específico. Como por exemplo, cursos livres de computação, de Excel, de idiomas, de pintura, de música, ou até de 
   liderança, gestão e bolsa de valores.<br>
   Além disso, o curso livre cai bem para você ter aquele currículo caprichado, repleto de capacitações complementares.
   Observe abaixo alguns dos cursos livres oferecdos pelo Senac RS.
   </p>
   </div>
   <div>
   <ul type="disc">
   <li class="li">COBIT - Fundamentos de Gestão de TI</li>
   <li class="li">ADOBE PHOTOSHOP LIGHTROOM</li>
   <li class="li">APLICAÇÕES WEB COM PYTHON</li>
   <li class="li">COREL DRAW</li>
   <li class="li">EMPREENDEDOR DIGITAL</li>
   <li class="li">GESTÃO ADMINISTRATIVA</li>
   <li class="li">GESTÃO FINANCEIRA</li>
   <li class="li">PLANEJAMENTO ESTRATÉGICO NA PRÁTICA</li>
   <li class="li">RH ESTRATÉGICO </li>
   </ul>  
   </div>
	<p class="titulo">
   Confira TAMBÉM clicando abaixo:<br>
   </p>
   </div>
   <div>
   <p id="corpobranco">
   <a href="../Cursos/RsTi.php">Programa RS TI</a> - Capacitamos profissionais para a área de TECNOLOGIA DA INFORMAÇÃO e os conectamos às oportunidades de trabalho das empresas parceiras.<br><br>
   <a href="../Cursos/Aprendizagem.php">Programa de Aprendizagem</a> - O Programa de Aprendizagem do Senac contempla um conjunto de ocupações, propiciando aos aprendizes competências voltadas à profissionalização e à cidadania, a partir da compreensão das características do mundo do trabalho e de seus fundamentos técnico-científicos.
   </p>
   <thead>
   <table align="justify">
      <tr>
         <td align="left" width="850"></td>
         <td align="left" width="900" ></td>
      </tr>
      </thead>
      <tbody>
         <tr>
            <td align="left"><a href="index.php">    <img src="img/senac.png" alt="Voltar ao Menu" width="100" height="50">
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
            </tr
      </tbody>
   </table>