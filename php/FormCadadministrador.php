
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrador</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo1.css">
     <link rel="stylesheet" type="text/css" href="../css/estilo2.css">
     <script language="javascript" src="java/formulario.js"> </script>
              
</head>
	  
 <body>
<form action="cadUser.php" method="post" name="dados" onSubmit="return enviardados();">
<table>
<tr><td>
<tr><td>Nome:</tr></td>
<tr><td><input  name="txtnome"   type="text" class="formbutton" id="tx_nome" size="52" maxlength="150"></td></tr>
<tr><td>login:</tr></td>
<tr><td><input name="txtlogin" type="text" id="tx_email" size="52" maxlength="150" class="formbutton"></td></tr>
<tr><td>senha:
<tr><td><input name="txtsenha" type="txt" class="formbutton" id="tx_nome" size="52" maxlength="150"></td></tr>
<tr><td><input name="Submit" type="submit" value="cadastrar"/><input name="Reset" type="reset"  value="Redefinir">
</tr></td>
</table>
</form>


</body>

</html>