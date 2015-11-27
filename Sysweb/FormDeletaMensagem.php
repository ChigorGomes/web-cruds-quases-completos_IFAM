<?php
include("conexaoBd.php");
try{
	$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$idmensagem= $_GET["idCONTATO"];
    
	$sql="DELETE FROM CONTATO WHERE idCONTATO= $idmensagem";
	
	$insere=$conn->query($sql);
	
	if($insere){
		echo"<script> alert('Exclusao efetuada com sucesso!');
		window.open('FormConsultaMensagem.php','_self')</script>";
		
	}
  }catch(Exception $e){
	  echo "Erro" .$e->getMessage();
  
	
}
	
?>