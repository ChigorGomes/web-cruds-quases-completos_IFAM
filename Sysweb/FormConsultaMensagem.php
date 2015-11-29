<script>
function deletaMensagem(){
	return confirm("deseja realmente excluir");
}
</script>
<meta charset="utf-8">
<a href="../administrador/area_Administrador.php">Voltar página anterior</a>
<form action ="formConsultaMensagem.php" method="post">
<table align="center">
<tr> <td colspan="3"> <strong>Formulario de Consulta de Usuarios</strong> </td> </tr>
<tr>
<td>Tipo:</td> <td> <input type="text" name="tipo" size="50"></td>
<td> <input type="submit" value="Buscar"> </td>
</tr>
</table>
<br><br>
<table width="80%" border="2px">
<tr>
<td>Tipo:</td>
<td>Nome:</td>
<td>Email:</td>
<td>Mensagem</td>
<td>Acao</td>
</tr>


<?php
Include("conexaoBd.php");
try{
	 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	 $tipo="";
	 if(isset($_POST) && !empty($_POST)){
		$tipo = $_POST["tipo"];
	 }
	 $sql="SELECT * FROM contato WHERE TIPO LIKE? ORDER BY TIPO";
	 $stmt=$conn->prepare($sql);
	 $stmt->bindValue(1,'%'.$tipo.'%');
	 $stmt-> execute();
	
	 if ($stmt){
		foreach ($stmt as $usr){
			echo"<tr>";
			echo "<td>".$usr["TIPO"]." </td>";
			echo "<td>".$usr['NOME']."</td>";
			echo "<td>".$usr['EMAIL']."</td>";
			echo "<td>".$usr['MENSAGEM']."</td>";
			echo "<td>";
			#echo"<a href='FormEditaMensagem.php?idCONTATO".$usr["idCONTATO"]."'>Alterar</a>";
			echo"<a href='formDeletaMensagem.php?idCONTATO=".$usr["idCONTATO"]."'onclick=' return 
			deletaMensagem(".$usr["idCONTATO"].")'>Excluir</a>";
			echo "</td>";
			echo"</tr>";
			
		 }
	  }
     }catch(Exception $e){
	  echo "Erro: ".$e->getMessage();
	
    }

?>

