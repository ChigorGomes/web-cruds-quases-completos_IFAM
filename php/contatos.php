<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contato</title>
     <link rel="stylesheet" type="text/css" href="../css/estilo1.css">
     <link rel="stylesheet" type="text/css" href="../css/estilo2.css">
     <script language="javascript" src="java/formulario.js"> </script>


</head> 
<h2>Quero me Cadastrar</h2>


<body class="body1"> 
<form action="../Sysweb/cadContato.php" method="post" name="dados" onSubmit="return enviardados();" >
 <table class="tab"> 
 <tr> 
 <td>Nome completo:</td> 
 <td> <input name="tx_nome" type="text" class="formbutton" id="tx_nome" size="52" maxlength="150"> </td> </tr> 
 <tr> 
 <td>E-mail:</td> 
 <td><input name="tx_email" type="text" id="tx_email" size="52" maxlength="150" class="formbutton"></td> </tr> 
 <tr> 
 <td>Mensagem:</td> 
 <td> <textarea name="tx_mensagem" cols="50" rows="8" class="formbutton" id="tx_mensagem" input ></textarea> </td> </tr> 
 <tr> 
 <td class="cadastrar"> <input name="Submit" type="submit" value="Enviar dados"> <input name="Reset" type="reset"  value="Redefinir"> 
 </td> 
 </tr> 
 
 </table> 
 </form> 
 
 </body> 
 </html>
