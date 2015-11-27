<?php
include("Sysweb/conexaoBD.php");
try{
	session_start();
	
	$login=$_POST["txtLogin"];
	$senha=$_POST["txtSenha"];
	
	$sql="SELECT * FROM usuario WHERE email='$login' AND senha='$senha'";
	$result = $conn-> query($sql);
	
	
	
	if($result->rowCount()> 0){
		$_SESSION["logado"]= true ;
		header("location:novoUsuario.php");
	

	}else{
		session_destroy();
		
		echo"<script> 
		alert('Dados invalidos');
		window.open('LoginUsuario.php','_self');
		</script>";
		
	}
  }catch(Exception $e){
	  echo "Erro" .$e->getMessage();
  
	
}

?>