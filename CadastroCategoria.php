<?php
include('Sysweb/conexaoBd.php');
try{
	$categoria= $_POST["txtCategoria"];
	
	
	
	$sql= "INSERT into categoria (CATEGORIA) VALUES ('$categoria')";

	$insere = $conn-> query($sql);

	if($insere){
		echo "<script> alert('Dados inseridos com sucesso!');
		window.open('cadCadastroCategoria.php','_self')</script>";
	}
}catch(Exception $e){
	echo 'Erro'. $e;
}
?>