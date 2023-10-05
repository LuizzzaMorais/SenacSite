<?php
require ('conexao.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cidade = $_POST['cidade'];
$estados = $_POST['estados'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$cripto = md5($senha);

/*
Inserir os dados do formulário 
na tabela contato do banco agenda
*/	
$sql = "INSERT INTO cadastro
(nome,cpf,estados,cidade,telefone,email,senha)VALUES
('$nome','$cpf','$estados','$cidade','$telefone','$email','$cripto')";

if($conn->query($sql)=== true){
echo 
"<script language='javascript' type='text/javascript'>
alert('Cadastro realizado com sucesso!');
window.location.href='../index.php';</script>";
die();
}else{
	echo "Erro: ".$sql."<br>"
	.$conn->error;
	echo "<br>";
	echo "Não foi possivel realizar 
	o cadastro";
}
//finaliza a conexão com o banco
$conn->close();

?>