<a href="../administrador/area_Administrador.php">Voltar página anterior</a>
<form action ="formConsultaCurriculo.php" method="post">
<table align="center">
<tr> <td colspan="3"> <strong>Formulario de Consulta de Curriculo</strong> </td> </tr>
<tr>
<td>nome:</td> <td> <input type="text" name="nome" size="50"></td>
<td> <input type="submit" value="Buscar"> </td>
</tr>
</table>
<br><br>
<table width="80%" border="2px">
<tr>
<td>Nome</td>
<td>Email</td>
<td>Telefone</td>
<td>Sexo</td>
<td>Data de Nascimento</td>
<td>Escolaridade</td>
<td>Curriculo</td>
<td>Empresa</td>
<td>Cargo</td>
<td>Atribuições</td>
<td>Data de admissão</td>
<td>Data demissão</td>
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
	 $sql="SELECT * FROM CURRICULO WHERE nome LIKE? ORDER BY nome";
	 $stmt=$conn->prepare($sql);
	 $stmt->bindValue(1,'%'.$nome.'%');
	 $stmt-> execute();
	
	 if ($stmt){
		foreach ($stmt as $usr){
			echo"<tr>";
			echo"<td>".$usr["NOME"]." </td>"; 
			echo "<td>".$usr["EMAIL"]."</td>";
			echo "<td>".$usr["TELEFONE"]."</td>";
			echo "<td>".$usr["SEXO"]."</td>";
			echo "<td>".$usr["NASCIMENTO"]."</td>";
			echo "<td>".$usr["ESCOLARIDADE"]."</td>";
			echo "<td>".$usr["CURRICULO"]."</td>";
			echo "<td>".$usr["EMPRESA"]."</td>";
			echo "<td>".$usr["CARGO"]."</td>";
			echo "<td>".$usr["COMENTARIO"]."</td>";
			echo "<td>".$usr["DATAADMISSAO"]."</td>";
			echo "<td>".$usr["DATADEMISSAO"]."</td>";


			echo "<td>";
			#echo"<a href='FormEditaAdministrador.php?id_administrador=".$usr["id_administrador"]."'>Alterar</a>";
			echo"<a href='deletaCurriculo.php?idCURRICULO=".$usr["idCURRICULO"]."'onclick=' return 
			deletaUsuario(".$usr["idCURRICULO"].")'>Excluir</a>";
			echo "</td>";
			echo"</tr>";
			
		 }
	  }
     }catch(Exception $e){
	  echo "Erro: ".$e->getMessage();
	
    }

?>

