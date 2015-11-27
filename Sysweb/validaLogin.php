<?php
include("conexaoBD.php");
try{
	session_start();
	
	$login=$_POST["txtLogin"];
	$senha=$_POST["txtsenha"];
	
	$sql="SELECT * FROM administrador WHERE login='$login' AND senha='$senha'";
	$result = $conn-> query($sql);
	
	
	
	if($result->rowCount()> 0){
		$_SESSION["logado"]= true ;
		header("location:novo.php");
	

	}else{
		session_destroy();
		
		echo"<script> 
		alert('Dados invalidos');
		window.open('telaLogin.php','_self');
		</script>";
		
	}
  }catch(Exception $e){
	  echo "Erro" .$e->getMessage();
  
	
}

?>