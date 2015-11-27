<?php
include ("conexaoBd.php");
$idAdministrador= $_GET["id_administrador"];
$sql= "SELECT * FROM ADMINISTRADOR WHERE id_administrador = $idAdministrador";
$results = $conn-> query($sql);
$nome=""; $login=""; $senha="";
if($results){
   foreach($results as $usr){
   $nome=$usr["nome"];
   $login=$usr["login"];
   $senha=$usr["senha"];
  }
}
?>
<a href="../administrador/area_Administrador.php">Voltar página anterior</a>
<form action="EditaUsuario.php" method="post">
<table>
<tr><td colspan="2">Formulario de alteraçao de usuario </td> </tr>
<tr><td>Nome:
<tr><td><input type="text" name="txtnome"  value="<?=$nome?>" > </td></tr>
<tr><td>login:</tr></td>
<tr><td><input name="txtlogin" type="text" id="tx_email" size="52" maxlength="150" class="formbutton" value="<?=$login?>"></td></tr>
<tr><td>senha:
<tr><td><input name="txtsenha" type="password" class="formbutton" id="tx_nome" size="52" maxlength="150" value="<?=$senha?>"></td></tr>
<tr><td><input name="Submit" type="submit" value="alterar"/><input type="button"  value="voltar" onclick="history.back0">
</td>
</tr>
</table>
<input type="hidden" name="txtidAdministrador" value="<?=$idAdministrador?>">
</form>
