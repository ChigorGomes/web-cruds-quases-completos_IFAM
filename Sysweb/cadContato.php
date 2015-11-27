<?php
include('../Sysweb/conexaoBd.php');
	try{
		$nome= $_POST['txt_nome'];
		$email= $_POST['txt_email'];
		$comentario= $_POST['txtmensagem'];
		$tipo=$_POST["txttipo"];
		
		
		$sql = "INSERT INTO Contato(nome,email,mensagem,tipo) values('$nome','$email','$comentario','$tipo')"; 
	$insere = $conn->query($sql);
	
	if($insere){
		echo "<script>alert('Dados inseridos com sucesso!')</script>";
	}
	}catch(Exception $e){
		 echo "Erro". $e->getMessage();
	}
	

?>