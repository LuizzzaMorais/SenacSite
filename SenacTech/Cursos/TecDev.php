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
			   <img id="senac" src="../img/senac.png" >
                  </a>
               </td>
               <td align="left" valign="bottom">
                  <h2 style="font-family:verdana" color="red">SenacTech - RS</h2>
               </td>
               <td>
                  <a href="https://www.facebook.com/senactech/?locale=pt_BR">  
                  <img class="logos" src="../img/facebook.png"> 
                  </a>
               </td>
               <td>
                  <a href="https://www.instagram.com/p/Cdod7rzsEpo/">
                  <img class="logos" src="../img/instagram.png"> 
                  </a>
               </td>
               <td>
                  <a href="https://twitter.com/senacrs">
                  <img class="logos" src="../img/twitter.png"> 
                  </a>
               </td>
               <td>
                  <a href="https://br.linkedin.com/posts/senac-rs_senac-tech-activity-6782286113403936768-9AR6?trk=public_profile_like_view">
                  <img class="logos" src="../img/linkedin.png"> 
                  </a>
               </td>
               <td>
                  <a href="https://br.linkedin.com/posts/senac-rs_senac-tech-activity-6782286113403936768-9AR6?trk=public_profile_like_view">
                  <img class="logos" src="../img/fale.png"> 
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
			echo "<a href='./TecDev.php?logout'>aqui.</a>";
		}else{
		echo "Seja bem vindo visitante, se deseja acessar o sistema <a href='../cadastro/login.php'>clique aqui.</a>";
		}
		if(isset($_GET['logout'])){
			session_destroy();
		}
		?>
		</div>
   <body>



<div>
   <p class="titulo">
   Técnico em Desenvolvimento de Sistemas
   </p>
   <p id="corpobranco">
  O desenvolvimento de novas soluções lhe desafia? Você gostaria de trabalhar em uma multinacional? O curso Técnico em Desenvolvimento de Sistemas - Bilíngue pode ser o primeiro passo para você realizar esses sonhos. Com ele, você terá a qualificação necessária para atuar na área de desenvolvimento, com um grande diferencial: a habilidade comunicacional em língua inglesa, para falar com um mercado cada dia mais globalizado. A área de desenvolvimento de sistemas emprega milhares de pessoas todos os dias e muitas das vagas não são supridas por falta de talentos. <br><br>Segundo a Brasscom, Associação das Empresas de Tecnologia da Informação e Comunicação (TIC) e de Tecnologias Digitais, o segmento deverá precisar de 70 mil profissionais por ano, até 2024. Chegou a sua vez! Com 1.216 horas, o curso prepara o profissional para desenvolver sistemas computacionais utilizando o ambiente de desenvolvimento, seguindo as normas e especificações da lógica e das linguagens de programação bem como a modelagem, implementação e manutenção do banco de dados. Além disso, a formação prepara para o desenvolvimento, a manutenção e testes de programas de computador, adotando normas técnicas e de qualidade.<br><br>Apesar de o curso ser bilíngue, o aluno não precisa saber inglês para ingressar. As aulas de inglês são ministradas de acordo com o andamento do conteúdo tecnológico e, dessa forma, são trabalhadas a fala, escrita e leitura relacionadas à profissão. Assim, você estará preparado para atuar em diversas frentes de trabalho, podendo empreender na área ou buscar seu primeiro estágio já nos primeiros meses de curso. A qualificação é uma excelente oportunidade para ingressar no mercado de trabalho, com muitas possibilidades de atuação. Venha para o Técnico em Desenvolvimento de Sistemas - Bilíngue do Senac-RS.
  </p>
  <img id="cursos" src="../img/cursos.png"
   </div>
 
   <br>
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