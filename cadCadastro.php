<?php
include('Sysweb/conexaoBd.php');
try{
	$nome= $_POST["txtNome"];
	$email= $_POST["txtEmail"];
	$senha= $_POST['txtSenha'];
	$data= $_POST['txt_Nascimento'];
	$estadoCivil= $_POST['txt_estadoC'];
	$sexo= $_POST['txt_Sexo'];
	$rua= $_POST['txt_Rua'];
	$numero= $_POST['txt_Numero'];
	$bairro= $_POST['txt_Bairro'];
	$cidade= $_POST['txt_Cidade'];
	$cep= $_POST['txt_Cep'];
	$telefone= $_POST['txt_Telefone'];
	
	
	
	$sql= "INSERT into usuario(NOME,SENHA,EMAIL,DATANASCIMENTO,ESTADOCIVIL,SEXO,RUA,NUMERO,BAIRRO,CIDADE,CEP,TELEFONE) values('$nome','$senha','$email','$data','$estadoCivil','$sexo','$rua','$numero','$bairro','$cidade','$cep','$telefone')";

	$insere = $conn-> query($sql);

	if($insere){
		echo "<script> alert('Dados inseridos com sucesso!');
		window.open('home.php','_self')</script>";
	}
}catch(Exception $e){
	echo 'Erro'. $e;
}
?>