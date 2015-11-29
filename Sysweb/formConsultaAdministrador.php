<script>
function deletaUsuario(){
	return confirm("deseja realmente excluir");
}
</script>
<meta charset="utf-8">
<a href="../administrador/area_Administrador.php">Voltar página anterior</a>
<form action ="formConsultaAdministrador.php" method="post">
<table align="center">
<tr> <td colspan="3"> <strong>Formulario de Consulta de Usuarios</strong> </td> </tr>
<tr>
<td>nome:</td> <td> <input type="text" name="nome" size="50"></td>
<td> <input type="submit" value="Buscar"> </td>
</tr>
</table>
<br><br>
<table width="80%" border="2px">
<tr>
<td>nome</td>
<td>login</td>
<td>Senha </td>
<td>Acao</td>
</tr>


<?php
Include("conexaoBd.php");
try{
	 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	 $nome="";
	 if(isset($_POST) && !empty($_POST)){
		$nome = $_POST["nome"];
	 }
	 $sql="SELECT * FROM ADMINISTRADOR WHERE nome LIKE? ORDER BY nome";
	 $stmt=$conn->prepare($sql);
	 $stmt->bindValue(1,'%'.$nome.'%');
	 $stmt-> execute();
	
	 if ($stmt){
		foreach ($stmt as $usr){
			echo"<tr>";
			echo"<td>".$usr["nome"]." </td>"; 
			echo "<td>".$usr["login"]." </td>" ;
			echo "<td>".$usr["senha"]."</td>";
			echo "<td>";
			echo"<a href='FormEditaAdministrador.php?id_administrador=".$usr["id_administrador"]."'>Alterar</a>";
			#echo"<a href='formDeletaUsuario.php?id_administrador=".$usr["id_administrador"]."'onclick=' return 
			#deletaUsuario(".$usr["id_administrador"].")'>Excluir</a>";
			echo "</td>";
			echo"</tr>";
			
		 }
	  }
     }catch(Exception $e){
	  echo "Erro: ".$e->getMessage();
	
    }

?>

