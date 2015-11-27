<?php
include("conexaoBd.php");
try{
	$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$idcliente = $_POST["idcliente"];
	$nome=$_POST["txtNome"];
	$email=$_POST["txtEmail"]; 
	$data=$_POST["txt_Nascimento"]; 
	$estadoCivil=$_POST["txt_estadoC"]; 
	$sexo=$_POST["txt_Sexo"];
	$rua=$_POST["txt_Rua"]; 
	$numero=$_POST["txt_Numero"];
	$bairro=$_POST["txt_Bairro"];
	$cidade=$_POST["txt_Cidade"];
	$cep=$_POST["txt_Cep"];
	$telefone=$_POST["txt_Telefone"];


	

	$sql= "UPDATE USUARIO SET NOME = '$nome',EMAIL='$email',DATANASCIMENTO='$data',
	ESTADOCIVIL='$estadoCivil',SEXO='$sexo',RUA='$rua',NUMERO='$numero',BAIRRO='$bairro',
	CIDADE='$cidade',CEP='$cep',TELEFONE='$telefone'
	WHERE CODUSUARIO = $idcliente";
	
	// executando sql
	$insere= $conn-> query($sql);
	
	// tratando msg
	
	if($insere){
		echo"<script>alert('alteração efetuada com sucesso!');
		window.open('ForConsultaCliente.php','_self')</script>";
		}
} catch(Exception $e){
	echo "Erro". $e->getMessage();
}

?>