<script>
function deletaCliente(){
	return confirm("deseja realmente excluir");
}
</script>
<meta charset="utf-8">
<a href="../administrador/area_Administrador.php">Voltar página anterior</a>
	  

   <form action ="ForConsultaCliente.php" method="post">
<table align="center">
<tr> <td colspan="3"> <strong>Formulario de Consulta de Clientes</strong> </td> </tr>
<tr>
<td>nome:</td> <td> <input type="text" name="nome" size="50"></td>
<td> <input type="submit" value="Buscar"> </td>
</tr>
</table>
<br><br>
<table width="80%" border="2px">
	<tr>
		<td>nome</td>
		<td>Email</td>
		<td>Data de Nascimento</td>
		<td>Estado Civil</td>
		<td>Sexo</td>
		<td>Rua</td>	
		<td>Numero</td>	
		<td>Bairro</td>
		<td>Cidade</td>	
		<td>Cep</td>
		<td>Telefone</td>
		<td>Acao</td>
</tr>




<?php
Include("conexaoBD.php");
try{
	 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	 $nome="";
	 if(isset($_POST) && !empty($_POST)){
		$nome = $_POST["nome"];
	 }
	 $sql="SELECT * FROM usuario WHERE NOME LIKE? ORDER BY NOME";
	 $stmt=$conn->prepare($sql);
	 $stmt->bindValue(1,'%'.$nome.'%');
	 $stmt-> execute();
	
	 if ($stmt){
		foreach ($stmt as $usr){
			echo"<tr>";
			echo "<td>".$usr["NOME"]."</td>";
			echo "<td>".$usr["EMAIL"]."</td>";
			echo "<td>".$usr["DATANASCIMENTO"]. "</td>";
			echo "<td>".$usr["ESTADOCIVIL"]. "</td>";
			echo "<td>".$usr["SEXO"]. "</td>";
			echo "<td>".$usr["RUA"]. "</td>";
			echo "<td>".$usr["NUMERO"]. "</td>";
			echo "<td>".$usr["BAIRRO"]. "</td>";
			echo "<td>".$usr["CIDADE"]. "</td>";
			echo "<td>".$usr["CEP"]. "</td>";
			echo "<td>".$usr["TELEFONE"]. "</td>";
			echo "<td>";
			echo"<a href='FormAlteraCliente.php?CODUSUARIO=".$usr["CODUSUARIO"]."'>Alterar</a>";
			echo"<a href='FormDeletaCliente.php?CODUSUARIO=".$usr["CODUSUARIO"]."'onclick=' return 
			deletaCliente(".$usr["CODUSUARIO"].")'>Excluir</a>";
			echo "</td>";
			echo"</tr>";
			
		 }
	  }
     }catch(Exception $e){
	  echo "Erro: ".$e->getMessage();
	
    }

?>

