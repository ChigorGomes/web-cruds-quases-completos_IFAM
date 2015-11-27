<?php
include("Sysweb/conexaoBd.php");
try{
	$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$idcliente= $_GET["idCodigo"];
    
	$sql="DELETE FROM produtos WHERE idCodigo= $idcliente";
	
	$insere=$conn->query($sql);
	
	if($insere){
		echo"<script> alert('Exclusao efetuada com sucesso!');
		window.open('ForConsultaCliente.php','_self')</script>";
		
	}
  }catch(Exception $e){
	  echo "Erro" .$e->getMessage();
  
	
}
	
?>