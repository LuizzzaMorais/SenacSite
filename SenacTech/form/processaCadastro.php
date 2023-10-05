<?php
require ('conexao.php');

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estados = $_POST['estados'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$modalidade = $_POST['modalidade'];
$assunto = $_POST['assunto'];
$obs = $_POST['obs'];


/*
Inserir os dados do formulário 
na tabela contato do banco agenda
*/	
$sql = "INSERT INTO faleconosco
(nome,cidade,estados,sexo,telefone,email,modalidade,assunto,descricao)VALUES
('$nome','$cidade','$estados','$sexo','$telefone','$email','$modalidade','$assunto','$obs')";
if($conn->query($sql)=== true){
echo 
"<script language='javascript' type='text/javascript'>
alert('Formulário cadastrado com sucesso! Aguarde uma resposta via email informado.');
window.location.href='../index.html';</script>";
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