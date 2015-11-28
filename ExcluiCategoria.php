<?php
include("Sysweb/conexaoBd.php");
try{
	$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$idcategoria= $_GET["id_categoria"];
    
	$sql="DELETE FROM  categoria WHERE id_categoria= $idcategoria";
	
	$insere=$conn->query($sql);
	
	if($insere){
		echo"<script> alert('Exclusao efetuada com sucesso!');
		window.open('consultaCategoria.php','_self')</script>";
		
	}
  }catch(Exception $e){
	  echo "Erro" .$e->getMessage();
  
	
}
	
?>