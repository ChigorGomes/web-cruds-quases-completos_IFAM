<meta charset="utf-8">
<a href="administrador/area_Administrador.php">Voltar página anterior</a>
	  

   <form action ="consultaCategoria.php" method="post">
<table align="center">
<tr> <td colspan="3"> <strong>Formulario de Consulta de Categoria</strong> </td> </tr>
<tr>
<td>nome:</td> <td> <input type="text" name="nome" size="50"></td>
<td> <input type="submit" value="Buscar"> </td>
</tr>
</table>
<br><br>
<table width="80%" border="2px">
	<tr>
		<td>Id Categoria</td>
		<td>Categoria</td>
		<td>Acao</td>
</tr>




<?php
Include("Sysweb/conexaoBd.php");
try{
	 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	 $nome="";
	 if(isset($_POST) && !empty($_POST)){
		$nome = $_POST["nome"];
	 }
	 $sql="SELECT * FROM categoria WHERE categoria LIKE? ORDER BY CATEGORIA";
	 $stmt=$conn->prepare($sql);
	 $stmt->bindValue(1,'%'.$nome.'%');
	 $stmt-> execute();
	
	 if ($stmt){
		foreach ($stmt as $usr){
			echo"<tr>";
			echo "<td>".$usr["id_categoria"]."</td>";
			echo "<td>".$usr["CATEGORIA"]."</td>";
			echo "<td>";
			echo"<a href='editaCategoria.php?id_categoria=".$usr["id_categoria"]."'>Alterar</a>";
			echo"<a href='ExcluiCategoria.php?id_categoria=".$usr["id_categoria"]."'onclick=' return 
			deletaCliente(".$usr["id_categoria"].")'>Excluir</a>";
			echo "</td>";
			echo"</tr>";
			
		 }
	  }
     }catch(Exception $e){
	  echo "Erro: ".$e->getMessage();
	
    }

?>