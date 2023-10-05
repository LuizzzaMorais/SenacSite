<?php
include ('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];

$cripto = md5($senha);

if(isset($entrar)){
		$verifica = mysqli_query
		($conn,"SELECT * FROM cadastro where email='$email' and senha='$cripto'")
		or die("Erro ao buscar no banco");
		if(mysqli_num_rows($verifica)<=0){
			echo "<script language='javascript' type='text/javascript'> alert('Não foi possível fazer login');
			window.location.href='../login.php'; </script>";	
			die();
		}else{
			session_start();
			$_SESSION['nome_usu_sessao'] = $email;
			header("Location: ../index.php");
		}
		
	}
?>