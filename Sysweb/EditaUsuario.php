<?php
include("conexaoBD.php");
try{
	$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	$idAdministrador = $_POST["txtidAdministrador"];
	$nome  = $_POST["txtnome"];
	$login =$_POST["txtlogin"];
	$senha =$_POST["txtsenha"];
	

	$sql= "UPDATE administrador SET nome = '$nome',login='$login',senha='$senha'
	WHERE id_Administrador = $idAdministrador";
	
	// executando sql
	$insere= $conn-> query($sql);
	
	// tratando msg
	
	if($insere){
		echo"<script>alert('alteração efetuada com sucesso!');
		window.open('formConsultaUsuario.php','_self')</script>";
		}
} catch(Exception $e){
	echo "Erro". $e->getMessage();
}

?>