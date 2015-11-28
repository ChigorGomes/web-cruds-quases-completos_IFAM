<?php
include("Sysweb/conexaoBd.php");
try{
	$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	$idCategoria = $_POST["txtidCategoria"];
	$nome  = $_POST["txtnome"];
	

	$sql= "UPDATE categoria SET CATEGORIA = '$nome'
	WHERE id_categoria = $idCategoria";
	
	// executando sql
	$insere= $conn-> query($sql);
	
	// tratando msg
	
	if($insere){
		echo"<script>alert('alteração efetuada com sucesso!');
		window.open('consultaCategoria.php','_self')</script>";
		}
} catch(Exception $e){
	echo "Erro". $e->getMessage();
}

?>