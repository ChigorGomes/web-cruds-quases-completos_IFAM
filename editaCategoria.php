<?php
include ("Sysweb/conexaoBd.php");
$idCategoria= $_GET["id_categoria"];
$sql= "SELECT * FROM categoria WHERE id_categoria = $idCategoria";
$results = $conn-> query($sql);
$nome="";
if($results){
   foreach($results as $usr){
   $nome=$usr["CATEGORIA"];
  }
}
?>
<a href="administrador/area_Administrador.php">Voltar página anterior</a>
<form action="formEditaCategoria.php" method="post">
<table>
<tr><td colspan="2">Formulario de Alteração de Categoria </td> </tr>
<tr><td>Nome:
<tr><td><input type="text" name="txtnome"  value="<?=$nome?>" > </td></tr>
<tr><td><input name="Submit" type="submit" value="alterar"/><input type="button"  value="voltar" onclick="history.back0">
</td>
</tr>
</table>
<input type="hidden" name="txtidCategoria" value="<?=$idCategoria?>">
</form>
