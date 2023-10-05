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
                     <a href="../Cursos/Apendizagem.php">
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
	  <br>
	  <div id="teste" style=" font-family: verdana; width: 100%; background-color: #004080; font-size: 20px; color: white; padding-top: 10px; padding-bottom: 10px; padding-left: 10px;css " >
<?php
if(isset($_SESSION['nome_usu_sessao'])){
			echo 'Olá '
			.$_SESSION['nome_usu_sessao'].', seja bem vindo de volta ao nosso site. Se quiser encessar sua sessão clique ';
			echo "<a href='./Aprendizagem.php?logout'>aqui.</a>";
		}else{
			echo "Seja bem vindo visitante, se deseja acessar o sistema <a href='../cadastro/login.php'>clique aqui.</a>";
		}
		if(isset($_GET['logout'])){
			session_destroy();
		}
		?>
		</div>
   
  <div>
  <br>
  <img src="img/aaa.png" id="banner">
   <p class="titulo">
   Programa de Aprendizagem<br>
   </p>
   <p id="corpobranco">
   Desde sua criação, o Senac tem o compromisso de oferecer Programas de Aprendizagem Profissional Comercial destinados a jovens na faixa dos 14 aos 24 anos de idade*, encaminhados pelas empresas do Setor do Comércio de Bens, Serviços e Turismo.
<br><br>
Compete ao Departamento Nacional do Senac apoiar os Departamentos Regionais no cumprimento desse compromisso histórico, fomentando investimentos em infraestrutura e equipamentos nos estados, e desenvolvendo, em colaboração com os Regionais, as diretrizes do Programa.
<br><br>
O Programa de Aprendizagem do Senac contempla um conjunto de ocupações, propiciando aos aprendizes competências voltadas à profissionalização e à cidadania, a partir da compreensão das características do mundo do trabalho e de seus fundamentos técnico-científicos.
<br><br>
A jornada de trabalho do jovem aprendiz compreende tanto as horas destinadas à formação educacional – cumpridas nas unidades educacionais do Senac – como a prática profissional – desenvolvida diretamente na empresa contratante.
<br><br>
Ao fazerem parte desse programa, os empregadores, além de cumprirem a legislação como contratantes de aprendizes, assumem papel de parceiros da ação educativa, atuando no processo de inserção dos jovens brasileiros.
</p>
   
   </div>

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