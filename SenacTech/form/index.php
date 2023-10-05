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
         href="../estilo/form.css" />
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
	  <div id="teste" style=" font-family: verdana; width: 100%; background-color: #1E90FF; font-size: 20px; color: white; padding-top: 10px; padding-bottom: 10px; padding-left: 10px;css " >
<?php
if(isset($_SESSION['nome_usu_sessao'])){
			echo 'Olá '
			.$_SESSION['nome_usu_sessao'].', seja bem vindo de volta ao nosso site. Se quiser encessar sua sessão clique ';
			echo "<a href='./index.php?logout'>aqui.</a>";
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

   <Thead>
         <h2 align="center" style="font-family:verdana">Fale Conosco</h2>
		 <p>
.
</p>
         <form action="processacadastro.php" method="post">
		<!-- fieldset - é usada para agrupar 
		elementos -->
		<div id="fundo">
		
		<div id="teste">
		<fieldset align="center"><!--Inicio - Tag mãe -->
			<fieldset class="bloco">
			<!--fieldset do campo nome -->
				<div class="dados">
				<label>Nome Completo:</label>
				<input type="text" id="nome" name="nome" required>
				</div>
			</fieldset>
			<fieldset class="bloco">
			<!--fieldset do campo endereço -->
				<div class="dados">
				<label>Cidade:</label>
				<input type="text" id="cidade" name="cidade" required />
				</div>
			</fieldset>
			<fieldset class="bloco">
			<!--fieldset do campo estado -->
				<div class="dados">
				<label>Estado:</label>
				<select id="estados" name="estados" required>
<option selected="" value="">Selecione o Estado (UF)</option>
<option value="Acre">Acre</option>
<option value="Alagoas">Alagoas</option>
<option value="Amapá">Amapá</option>
<option value="Amazonas">Amazonas</option>
<option value="Bahia">Bahia</option>
<option value="Ceará">Ceará</option>
<option value="Distrito Federal">Distrito Federal</option>
<option value="Espírito Santo">Espírito Santo</option>
<option value="Goiás">Goiás</option>
<option value="Maranhão">Maranhão</option>
<option value="Mato Grosso">Mato Grosso</option>
<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
<option value="Minas Gerais">Minas Gerais</option>
<option value="Pará">Pará</option>
<option value="Paraíba">Paraíba</option>
<option value="Paraná">Paraná</option>
<option value="Pernambuco">Pernambuco</option>
<option value="Piauí">Piauí</option>
<option value="Rio de Janeiro">Rio de Janeiro</option>
<option value="Rio Grande do Sul">Rio Grande do Sul</option>
<option value="Rio Grande do Norte">Rio Grande do Norte</option>
<option value="Rondônia">Rondônia</option>
<option value="Roraima">Roraima</option>
<option value="Santa Catarina">Santa Catarina</option>
<option value="São Paulo">São Paulo</option>
<option value="Sergipe">Sergipe</option>
<option value="Tocantins">Tocantins</option>
</select>
				</div>
			</fieldset>
			<fieldset class="bloco">
			<!--fieldset do campo sexo -->
				<div class="dados">
				<label>Sexo:</label>
				<input type="radio" id="sexo" name="sexo" value="M">Masculino
					
				<input type="radio" id="sexo" name="sexo" value="F">Feminino
				</div>
			</fieldset>
			<fieldset class="bloco">
			<!--fieldset do campo celular -->
				<div class="dados">
				<label>Telefone:</label>
				<input type="tel" id="celular" name="telefone" 
				pattern="[0-9]{11}" 
				title="O número deve ter 11 dígitos"
				required />
				</div>
			</fieldset>
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
			<!--fieldset do campo usuario -->
				<div class="dados">
				<label>Modalidade:</label>
				<input type="text" id="usuario" name="modalidade" required />
				</div>
			</fieldset>
			<fieldset class="bloco">
			<!--fieldset do campo senha -->
				<div class="dados">
				<label>Assunto:</label>
				<input type="text" id="assunto" name="assunto" required />
				</div>
			</fieldset>
			<fieldset class="bloco">
			<!--fieldset do campo observação -->
				<div class="dados">
				<label>Observação:</label>
				<textarea name="obs" id="obs" rows="8" cols="30"></textarea>
				</div>
			</fieldset>
			<button type="submit" class="botao" 
			name="submit">
			Enviar
			</button>
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