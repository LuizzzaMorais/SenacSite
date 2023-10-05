	<?php
		session_start();
		
		?>	
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title>SenacTech - Cadastro</title>
      <meta name="viewport" content="width=device-width,initial-scale=0.6">
      <!-- Definição de codificação de caracteres. Recomenda-se usar sempre UTF-8 -->
      <meta charset="UTF-8">
      <link rel="stylesheet" 
         type="text/css" 
         href="../estilo/css.css" />
		 <link rel="stylesheet" 
         type="text/css" 
         href="../estilo/form.css" />
      <table align="justify">
         <tr>
            <td align="left" width="850"></td>
            <td align="left" width="900" ></td>
         </tr>
         <tbody>
            <tr>
               <td align="left">
			   <a href="../index.php">    
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
<body>
<br>
<div id="teste" style=" font-family: verdana; width: 100%; background-color: #1E90FF; font-size: 20px; color: white; padding-top: 10px; padding-bottom: 10px; padding-left: 10px;css " >
<?php
if(isset($_SESSION['nome_usu_sessao'])){
			echo 'Olá '
			.$_SESSION['nome_usu_sessao'].', seja bem vindo de volta ao nosso site. Se quiser encessar sua sessão clique ';
			echo "<a href='./login.php?logout'>aqui.</a>";
		}else{
		echo "Seja bem vindo visitante, insira seus dados abaixo para iniciar sua sessão.";
		}
		if(isset($_GET['logout'])){
			session_destroy();
		}
		?>
		</div>
   <br>
         <h2 align="center" style="font-family:verdana">Login</h2>
		 <br>

			
		 <p>
.
</p>
         <form action="verificarLogin.php" method="post">
		<!-- fieldset - é usada para agrupar 
		elementos -->
		<div id="fundo">
		
		<div id="teste">
		<fieldset align="center"><!--Inicio - Tag mãe -->
			<br>
			<br>
			<br>
			<br>
			<fieldset class="bloco">
			<!--fieldset do campo email -->
				<div class="dados">
				<label>E-mail:</label>
				<input type="email" id="email" name="email" required 
					placeholder="nome@dominio.com" 
					pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
					title="O formato do e-mail deve ser: 
					nome@dominio.com" />
				</div>
			</fieldset>
			<fieldset class="bloco">
			<br>
			<br>
			<br>
			<br>

			<!--fieldset do campo usuario -->
				<div class="dados">
				<label>Senha:</label>
				<input type="password" id="usuario" name="senha" required />
				<br>
			<br>
			<br>
			<br>
			<br>
			<br>
				</div>
			</fieldset>
			<button type="submit" class="botao" 
			name="entrar" value="entrar" id="entrar">
			Entrar
			</button>
			<br>
			<br>
			<br>

			<br>
		</fieldset><!--Fim - Tag mãe -->
		</div>
		</div>
		
		</form>	
		<p>
.
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
            <td align="left"><a href="../index.php">    <img src="../img/senac.png" alt="Voltar ao Menu" width="100" height="50">
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
   </html>