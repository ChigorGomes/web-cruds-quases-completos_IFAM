<?php
include ("Sysweb/conexaoBd.php");
$idcategoria= $_GET["id_categoria"];
$sql= "SELECT * FROM categoria WHERE id_categoria = $idcategoria";
$results =$conn->query($sql);
$nome="";
if($results){
   foreach($results as $usr){
   $nome=$usr["CATEGORIA"];
  }
}
?>
<a href="administrador/area_Administrador.php">Voltar página anterior</a>
<form action="editaCategoria.php" method="post">
<table>
<tr><td colspan="2">Formulario de alteraçao de Categoria </td> </tr>
<tr><td>Categoria:
<tr><td><input type="text" name="txtCategoria"  value="<?=$nome?>" > </td></tr>
<tr><td><input name="Submit" type="submit" value="alterar"/>
<input type="reset"  value="Resetar">
</td>
</tr>
</table>
<input type="hidden" name="txtidAdministrador" value="<?=$idcategoria?>">
</form>
